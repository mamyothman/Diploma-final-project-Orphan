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
        <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">User Registration     /</div>
        </div>
        <div class="row">
          <div class="col-md-12">
           <div class="card">
            <div class="card-header">
            <div class="d-flex justify-content-end">
                    <a href="../pages/registerUser.php" class="btn btn-success">Add user</a>
            </div>
            </div>
            <div class="card-body">
            <table class="table table-bordered" id="usersTable">
                <thead>
                    <tr>
                        <th>Sn.</th>
                        <th>username</th>
                        <th>Roles</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
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
<script src="../controller/users.js"></script>
</body>
</html>