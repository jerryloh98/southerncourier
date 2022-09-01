<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Staff</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "aheader.php"; ?>

<body>
    <center>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br>
            Name: <input type="text" name="name" required>
            <br>
            Gender:<br>
            <input type="radio" name="gender" value="male">Male&nbsp;&nbsp;
            <input type="radio" name="gender" value="female">Female
            <br><br>
            Phone Number: <input type="number" name="contact" minlength="8" maxlength="11" required>
            <br>
            Username: <input type="text" name="username" required>
            <br>
            Password: <input type="password" name="password" required>
            <br>
            <button type="submit" name="Submit">Add</button>
        </form>
    </center>

    <?php
    if (isset($_POST['Submit'])) {
        if (!empty($_POST['name']) && !empty($_POST['gender']) && !empty($_POST['contact']) && !empty($_POST['username']) && !empty($_POST['password']))
            checkusrname();
        else
            echo '<script>alert("Please Fill In All Values!")</script>';
    }

    function checkusrname()
    {
        include 'dbconnect.php';
        $username = $_POST['username'];
        $sql = "SELECT * FROM staff WHERE username = '$username'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) != 0) {
            echo '<script>alert("Username already exists!!")</script>';
        } else 
		if (isset($_POST['Submit'])) {
            newStaff();
        }
    }

    function newStaff()
    {
        include 'dbconnect.php';
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO staff (Name, Gender, Contact, Username, Password) VALUES ('$name','$gender','$contact','$username','$password')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Staff added successfully!!")</script>';
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
<link href="assets/css/aindex.css" rel="stylesheet">
<link href="assets/css/admin.css" rel="stylesheet">