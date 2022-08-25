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
                        Staff Sign In</p>
                    <br><br>
                    <form class="login" method="POST" action="ssignin.php">
                        <input type="text" name="username" placeholder="Username" required />
                        <input type="password" name="password" placeholder="Password" required />
                        <input type="submit" name="submit" value="Sign In" class="btn btn-success btn-sm" />
                    </form>
                </div>
            </div>
        </div>

        <?php
        function SignIn()
        {
            include 'dbconnect.php';
            session_start(); {
                
                $query = mysqli_query($conn, "SELECT * FROM staff where username = '$_POST[username]' AND password = '$_POST[password]'");
                $row = mysqli_fetch_array($query);
                if (!empty($row['username']) and !empty($row['password'])) {
                    $_SESSION['staffname']=$row['name'];
                    $_SESSION['username'] = $row['password'];
                    echo '<p class=success>Logging you in..</p>';
                    header("Refresh:3; url=smain.php");
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
<link href="assets/css/sindex.css" rel="stylesheet">
<link href="assets/css/ssignin.css" rel="stylesheet">