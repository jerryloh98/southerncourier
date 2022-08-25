<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Sign in</title>
</head>

<body>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap">
                    <p class="form-title">
                        Admin Sign In</p>
                    <br><br>
                    <form class="login" method="POST" action="asignin.php">
                        <input type="text" name="uname" placeholder="Username" required />
                        <input type="password" name="pass" placeholder="Password" required />
                        <input type="submit" name="submit" value="Sign In" class="btn btn-success btn-sm" />
                    </form>
                </div>
            </div>
        </div>

        <?php
        function SignIn()
        {
            session_start(); {
                if ($_POST['uname'] == 'admin' && $_POST['pass'] == 'admin') {
                    $_SESSION['userName'] = 'admin';
                    echo '<p class=success>Logging you in..</p>';
                    header("Refresh:3; url=amain.php");
                } else {
                    echo '<p class=error>Wrong Credentials!</p>';
                    header("Refresh:3;");
                }
            }
        }
        if (isset($_POST['submit'])) {
            SignIn();
        }
        ?>
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
<link href="assets/css/aindex.css" rel="stylesheet">
<link href="assets/css/asignin.css" rel="stylesheet">