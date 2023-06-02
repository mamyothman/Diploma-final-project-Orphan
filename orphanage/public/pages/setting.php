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
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
               <div class="card">
                <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="currentPassword">Current Password</label>
                        <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </form>
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