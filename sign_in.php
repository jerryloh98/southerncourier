<?php
include_once 'dbconnect.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = "user";
    $query = "SELECT * FROM user where username = '$username' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if (!empty($row['username']) and !empty($row['password'])) {
        $_SESSION['username'] = $row['username'];

        session_start();
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $username;
        $_SESSION['type'] = $type;
        header("location: uindex.php");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Invalid username or password!")';
        echo '</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign in</title>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <!-- Sign In Form-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap">
                    <p class="form-title">
                        Sign In</p>
                    <form class="login" method="POST" action="sign_in.php">
                        <input type="text" name="username" placeholder="Username" />
                        <input type="password" name="password" placeholder="Password" />
                        <input type="submit" name="login" value="Sign In" class="btn btn-success btn-sm" />
                        <br><br><a href="sign_up.php" style="color:blue; text-align:center; display:block;">Sign Up?</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<!-- assets -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/source.bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/sign_in.js"></script>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/source.bootstrap.min.css" rel="stylesheet">
<link href="assets/css/half-slider.css" rel="stylesheet">
<link href="assets/css/index.css" rel="stylesheet">
<link href="assets/css/sign_in.css" rel="stylesheet">