$(document).ready(function() {
    const url = '../services/user_api.php'; // Replace with the actual URL of your PHP file

    // Function to populate the table with data
    function populateTable() {
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#usersTable tbody').empty(); // Clear existing table data

                // Iterate through the data and append rows to the table
                $.each(data, function(index, user) {
                    const row = $('<tr></tr>');
                    row.append('<td>' + (index + 1) + '</td>');
                    row.append('<td>' + user.name + '</td>');
                    row.append('<td>' + user.roles + '</td>');
                    row.append('<td>' + user.status + '</td>');

                    const actions = $('<td></td>');
                    actions.append('<button class="btn btn-primary btn-sm edit-btn" data-id="' + user.id + '">Edit</button>');
                    actions.append('<button class="btn btn-danger btn-sm delete-btn" data-id="' + user.id + '">Delete</button>');

                    row.append(actions);

                    $('#usersTable tbody').append(row);
                });
            }
        });
    }

    // Initial population of the table
    populateTable();

    // Event listener for the edit button
    $(document).on('click', '.edit-btn', function() {
        const userId = $(this).data('id');
        // Retrieve the user details using the getResourceById function
        getResourceById(url, userId)
            .then(function(user) {
                // Perform any necessary action for editing the user
                console.log('Edit user:', user);
            })
            .catch(function(error) {
                console.error('Error retrieving user:', error);
            });
    });

    // Event listener for the delete button
    $(document).on('click', '.delete-btn', function() {
        const userId = $(this).data('id');
        // Delete the user using the deleteResource function
        deleteResource(url, userId)
            .then(function() {
                // Refresh the table after deletion
                populateTable();
            })
            .catch(function(error) {
                console.error('Error deleting user:', error);
            });
    });

    // Function to retrieve a resource by ID
    function getResourceById(url, resourceId) {
        return $.ajax({
            url: url + '?id=' + resourceId,
            type: 'GET',
            dataType: 'json'
        });
    }

    // Function to delete a resource
    function deleteResource(url, resourceId) {
        return $.ajax({
            url: url + '?id=' + resourceId,
            type: 'DELETE',
            dataType: 'json'
        });
    }

    $('#registerForm').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Get the form data
        var username = $('#username').val();
        var password = $('#password').val();
        var roles = $('#roles').val();
        var status = "Active";

        // Create an object with the form data
        var formData = {
            username: username,
            password: password,
            roles: roles,
            status:status
        };

        // Send an AJAX POST request to create a new resource
        $.ajax({
            type: 'POST',
            url: url,
            data: JSON.stringify(formData),
            contentType: 'application/json',
            dataType: 'json',
            success: function(response) {
                // Handle the success response
                console.log('Resource created successfully with ID: ' + response.id);
                // Perform any additional actions after successful registration
            },
            error: function(xhr, status, error) {
                // Handle the error response
                console.log('Error:', error);
            }
        });
    });
});