<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact Us</title>

</head>

<body>
  <header>
    <?php
    include "header.php";
    ?>
  </header>

  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1>Contact Us</h1>
      <br>
      <!-- Contact us form-->
      <div class="container">
        <form role="form" target="_blank" action="https://formsubmit.co/southerncourier@gmail.com" method="POST">
          <div class="form-group">
            <div class="form-row">
              <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
              </div>
              <div class="col">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea placeholder="Message" class="form-control" name="message" rows="10" required></textarea>
          </div>
      <button type="submit" class="btn btn-lg btn-block">Submit</button>
      </div>
      </form>
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
<link href="assets/css/contact_us.css" rel="stylesheet">