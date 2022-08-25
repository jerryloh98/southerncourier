<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>My Profile</title>

  <!-- Custom styles for this profile page -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body>

  <?php
  include "uheader.php";
  include_once 'dbconnect.php';
  $sql = "SELECT * FROM user WHERE username = '$_SESSION[username]'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  ?>
  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <!--profile code-->
      <div class="container">
        <div class="fb-profile">
          <div class="fb-profile-text">

            <h1><?php echo "$row[fname]"; ?>'s Profile</h1>

            <table style="border: none; font-family:Arial; font-weight: bold">
              <tr>
                <td> Name:</td>
                <td><?php echo "$row[fname] $row[lname]"; ?></td>
              </tr>
              <tr>
                <td> Email:</td>
                <td><?php echo "$row[email]"; ?></td>
              </tr>
              <tr>
                <td> Phone:</td>
                <td><?php echo "$row[phone]"; ?></td>
              </tr>
              <tr>
                <td> Address:</td>
                <td><?php echo "&nbsp;$row[address]"; ?></td>
              </tr>
            </table>
          </div>
        </div>

      </div> <!-- /container -->

      <div class="col-md-3">
        <form class="form-inline" role="form" class="pagination-right" action="profileEdit.php">
          <div class="form-group">
            <br><button type="submit" class="btn btn-xl btn-danger">Edit</button>
        </form>
      </div>
    </div>
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
<link href="assets/css/profile.css" rel="stylesheet">