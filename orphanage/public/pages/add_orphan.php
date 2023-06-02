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
        <div class="shadow-lg p-3 mb-3 bg-body-tertiary rounded">Add Orphans    /</div>
        </div>
            <div class="row">
                <div class="com-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Enter Orphan's Frist Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Enter Orphan's Second Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Enter Orphan's Last Name">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <input type="number" class="form-control" id="orphan-age" placeholder="Enter age" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label for="orphan-gender" class="mr-2">Gender</label>
                                        <select class="form-control" id="orphan-gender" required>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="orphan-address" class="mr-2">Address</label>
                                        <input type="text" class="form-control" id="orphan-address" placeholder="Enter address" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="sponsor-phone" class="mr-2">Sponsored Phone</label>
                                        <input type="tel" class="form-control" id="sponsor-phone" placeholder="Enter sponsored phone"
                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                        <small class="form-text text-muted">Please enter the phone number in the format: 123-456-7890</small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="orphan-education" class="mr-2">Education</label>
                                        <input type="text" class="form-control" id="orphan-education" placeholder="Enter education level" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <button class="btn btn-success">Submit</button>
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