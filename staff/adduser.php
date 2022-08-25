<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "sheader.php"; ?>

<body>
    <center>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br>
            First Name: <input type="text" name="fname" required>
            <br>
            Last Name: <input type="text" name="lname" required>
            <br>
            Address: <input type="text" name="address" required>
            <br>
            Email: <input type="text" name="email" required>
            <br>
            Phone Number: <input  type="tel" name="phone" minlength="8" maxlength="11" required>
            <br>
            Username: <input type="text" name="username" required>
            <br>
            Password: <input type="password" name="password" minlength="4" maxlength="16" required>
            <br>
            <button type="submit" name="Submit">Add</button>
        </form>
    </center>

    <?php
    if (isset($_POST['Submit'])) {
        if (!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['username']) && !empty($_POST['password']))
        checkusrname();
        else
            echo '<script>alert("Please Fill In All Values!")</script>';
    }

    function checkusrname()
    {
        include 'dbconnect.php';
        $username = $_POST['username'];
        $sql = "SELECT * FROM user WHERE username = '$username'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) != 0) {
            echo '<script>alert("Username already exists!!")</script>';
        } else 
		if (isset($_POST['Submit'])) {
            checkemail();
        }
    }

    function checkemail()
    {
        include 'dbconnect.php';
        $email = $_POST['email'];
        $sql = "SELECT * FROM user WHERE email = '$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) != 0) {
            echo '<script>alert("Email already exists!!")</script>';
        } else 
		if (isset($_POST['Submit'])) {
            newUser();
        }
    }

    function newUser()
    {
        include 'dbconnect.php';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO user (fname, lname, Address, Email, phone, Username, Password) VALUES ('$fname','$lname','$address','$email','$phone','$username','$password')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("User added successfully!!")</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="3;">';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
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
<link href="assets/css/sindex.css" rel="stylesheet">
<link href="assets/css/staff.css" rel="stylesheet">