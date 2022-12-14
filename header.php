<?php
session_start();
require_once 'dbconnect.php';
?>

<!-- Navigation -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="assets/css/index.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-red fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Southern Courier</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="about_us.php">About Us</a></li>
          <li><a href="contact_us.php">Contact Us</a> </li>
          <li><a href="outlets.php">Outlets</a></li>
        </ul>

        <?php

        if (isset($_SESSION['valid']) != true) {
        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="sign_in.php">Sign In</a></li>
            <li><a href="sign_up.php">Sign Up</a></li>
          </ul>
        <?php
        } else {
        ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="signout.php">Logout</a></li>
          </ul>
        <?php
        }
        ?>
      </div>
    </div>
  </nav>
</body>

</html>