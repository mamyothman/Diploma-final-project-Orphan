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
  <div class="content-wrapper pt-2">
  <div class="container">
  <div class="row">
        <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">Darshbourd    /</div>
        </div>
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card bg bg-primary">
          <div class="card-body">
            <h5 class="card-title">Total Users</h5>
            <p class="card-text">100</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="card bg bg-success">
          <div class="card-body">
            <h5 class="card-title">Total Orphans</h5>
            <p class="card-text">500</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="card bg bg-warning">
          <div class="card-body">
            <h5 class="card-title">Pending Orphans</h5>
            <p class="card-text">$10,000</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- Footer -->
<?php
 include '../footer/footer.php';
?>
</body>
</html>