    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
  <style>
    .sidebar-mini.sidebar-collapse .brand-link {
      display: none !important;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">

  <!-- Header -->
  <?php
    include '../header/header.php';
?>
  <!-- Sidebar -->
  <?php
 include '../asside/asside.php';
?>

  <!-- Content Wrapper -->
  <div class="content-wrapper pt-3">
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">Orphan Details    /</div>
        </div>
        <div class="card">
            <div class="card-body">
                    <form id="registerForm">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                        </div>
                        <div class="form-group">
                          <label for="">Roles</label>
                          <select name="roles" id="roles" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>    
            </div>
        </div>
    </div>
          </div>
        </div>
      </div>
    </section>
  </div>


  <!-- Footer -->
<?php
 include '../footer/footer.php';
?>
</body>
</html>