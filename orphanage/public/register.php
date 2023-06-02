<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Orphanage | Home</title>
  <style>
    /* Set the height of the map container */
    #map {
      height: 300px;
    }
    img{
        width:450px;
        height:200px;
    }
  </style>
</head>

<body>

  <!-- Header Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <b><a class="navbar-brand text-white" href="#">Orphanage</a></b>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link text-white" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="login.php">Sing In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="register.php">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>


  <!-- Main Content -->
  <div class="container mt-5">
    <section>
    <div class="row">
        <div class="col-md-5" style="margin:auto">
        <div class="register-card">
    <h2 class="text-center mb-4">Admin Panel Registration</h2>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your confirm password">
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
      <div class="text-center mt-3">
        <p>Already have an account? <a href="index.php">Login</a></p>
      </div>
    </form>
  </div>

        </div>
    </div>
    </section>
  </div><hr><hr>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="margin:auto;">
          <h5>&copy; 2023 Orphanage. All rights reserved.</h5>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.bundle.min.js"></script>
  
  <!-- Google Maps API script -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
  
  <script>
    // Initialize and add the map
