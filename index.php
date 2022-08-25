<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Southern Courier</title>
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
          <img src="images/poster1.jpg" style="height: 100%; width: 100%; margin: auto;" alt="">
        </div>

        <div class="carousel-item item">
          <img src="images/poster2.jpg" style="height: 100%; width: 100%; margin: auto;" alt="">
        </div>

        <div class="carousel-item item">
          <img src="images/poster3.jpg" style="height: 100%; width: 70%; margin: auto;" alt="">
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
      <h3>Why Choose Us?</h3>
      <ul>
        <li>Affordable shipping price</li>
        <li>Guarantee next day delivery</li>
        <li>24/7 customer support</li>
      </ul>
      <!-- <p> We provide Door to Door (D2D) service with next day delivery service guarantee.</p> -->
    </div>
    <br><br>
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