<?php
// Assuming you have a database connection
// Replace the placeholders with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Orphans";

// Create a new resource
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    // Extract the data from the request
    $username = $data['username'];
    $password = $data['password'];
    $roles = $data['roles'];
    $status = $data['status'];
    

    // Create a new MySQLi instance
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO login (username, password,roles,status) VALUES (?, ?,?,?)");
    $stmt->bind_param('ssss', $username, $password,$roles,$status);

    // Execute the statement
    $stmt->execute();

    // Return the newly created resource's ID
    $response = ['id' => $conn->insert_id];
    echo json_encode($response);
    exit;
}

// Update an existing resource
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $_GET['id'];

    // Extract the data from the request
    $name = $data['name'];
    $email = $data['email'];

    // Create a new MySQLi instance
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE login SET name = ?, email = ? WHERE id = ?");
    $stmt->bind_param('ssi', $name, $email, $id);

    // Execute the statement
    $stmt->execute();

    // Return a success message
    $response = ['message' => 'Resource updated successfully'];
    echo json_encode($response);
    exit;
}

// Delete an existing resource
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'];

    // Create a new MySQLi instance
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("DELETE FROM login WHERE id = ?");
    $stmt->bind_param('i', $id);

    // Execute the statement
    $stmt->execute();

    // Return a success message
    $response = ['message' => 'Resource deleted successfully'];
    echo json_encode($response);
    exit;
}

// Retrieve all resources
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Create a new MySQLi instance
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM login");

    // Execute the statement
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    // Fetch all rows as associative arrays
    $rows = [];
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }

    // Return the rows as JSON
    echo json_encode($rows);
    exit;
}

// Retrieve a resource by ID
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Create a new MySQLi instance
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM login WHERE id = ?");
    $stmt->bind_param('i', $id);

    // Execute the statement
    $stmt->execute();

    // Get the result set
    $result = $stmt->get_result();

    // Fetch the row as an associative array
    $row = $result->fetch_assoc();

    // Return the row as JSON
    echo json_encode($row);
    exit;
}
?>
