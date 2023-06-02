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
    <h1>Welcome to our Orphanage</h1>
    <p>We are dedicated to providing care and support to orphaned children.</p>
    <img src="./img/shutterstock_1180465816-scaled.jpg" alt="">

    <section id="about" class="mt-5">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </section>

    <section id="contact" class="mt-5">
      <h2>Contact Us</h2>
      <p>For any inquiries or to get involved, please reach out to us:</p>
      <p>Email: contact@orphanage.org</p>
      <p>Phone: +1234567890</p>
    </section>
  </div>

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
