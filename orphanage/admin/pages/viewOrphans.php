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
        <div class="row">
          <div class="col-md-12">
          <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Orphan Personal Information
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Orphan's Name</h5>
                        <p class="card-text">Name: John Doe</p>
                        <p class="card-text">Age: 12</p>
                        <p class="card-text">Gender: Male</p>
                        <p class="card-text">Address: 123 Street, City</p>
                        <p class="card-text">Contact: 123-456-7890</p>
                        <p class="card-text">Education: Grade 6</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Accept</button><button class="btn btn-danger">Reject</button>
                    </div>
                </div>
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