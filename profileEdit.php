<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Profile</title>
    <!-- Custom styles for this profile page -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body>

    <?php
    include "uheader.php";
    ?>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <!--profile code-->
            <div class="container">
                <div class="fb-profile">
                    <div class="fb-profile-text">

                        <?php
                        include_once 'dbconnect.php';
                        $sql = "SELECT * FROM user WHERE username = '$_SESSION[username]'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        ?>
                        <h1><?php echo "$row[fname]"; ?>'s Profile</h1>
                        <form action="profileEdit.php" method="POST">
                            <table style="border: none; font-family: Arial; font-weight: bold;">
                                <tr>
                                    <td> First name:</td>
                                    <td>
                                        <input type="text" name="fname" value="<?php echo "$row[fname]"; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td> Last name:</td>
                                    <td>
                                        <input type="text" name="lname" value="<?php echo "$row[lname]"; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td> Email:</td>
                                    <td>
                                        <input type="text" name="email" value="<?php echo "$row[email]"; ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td> Phone:</td>
                                    <td><input type="text" name="phone" value="<?php echo "$row[phone]"; ?>"></td>
                                </tr>
                                <tr>
                                    <td> Address: </td>
                                    <td><input style="width: 200px; height: 100px;" type="text" name="address" value="<?php echo "$row[address]"; ?>"></td>
                                </tr>
                            </table><br>
                            <button type="submit" class="btn btn-xl btn-danger" name="update" value="update">Update</button>
                        </form>
                    </div>
                </div>
            </div> <!-- /container -->

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

<style>
    td {
        padding: 5px;
    }
</style>

<?php
if (isset($_POST['update'])) {
    include 'dbconnect.php';
    $username = $_SESSION['username'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "UPDATE user SET fname = '$_POST[fname]', lname = '$_POST[lname]', email = '$_POST[email]', phone = '$_POST[phone]', address = '$_POST[address]' WHERE username = '$_SESSION[username]'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Profile updated!!"); window.location.href="profile.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
