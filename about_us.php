<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/css/half-slider.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/half-slider.css" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">
  <script src="assets/js/source.bootstrap.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <title>About Us</title>
</head>

<body>

  <?php
  include "header.php";
  ?>

  <header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="carousel-item item active">
        <img src="images/poster2.jpg" style="height: 100%; width:100%;" alt="">
        </div>

        <div class="carousel-item item">
        <img src="images/poster3.jpg" style="height: 100%; width:100%;" alt="">
        </div>

        <div class="carousel-item item">
        <img src="images/poster1.jpg" style="height: 100%; width:100%;" alt="">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1>About Us</h1>
      <p>This Courier Management System is an Online Booking Platform for Parcel Delivery. We are specialised in parcel delivery field for more than 3 years.
        <br>We have a wide selection of services to choose from mainly Door 2 Door service. Guarantee next day delivery!
        <br>We offer the most affordable pricing for the best services compared to your competitor.
        <br><br>We strived to become the No. 1 courier delivery company in Malaysia!
      </p>
    </div>
    <br>
    <br>
  </section>

  <?php
  include "footer.php";
  ?>

</body>

</html>

<!-- assets -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/source.bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/source.bootstrap.min.css" rel="stylesheet">
<link href="assets/css/half-slider.css" rel="stylesheet">
<link href="assets/css/index.css" rel="stylesheet">