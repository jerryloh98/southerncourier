<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "sheader.php"; ?>

<body>
    <div class="container">
        <?php
        include_once 'dbconnect.php';
        $uid = $_GET['uid'];
        $sql = "SELECT * FROM user WHERE uid=$uid";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>
        <h1><?php echo "$row[lname]  $row[fname]"; ?></h1>
        <form action="updateuser.php" method="POST">
            <table style="border: none; font-family: Arial; font-weight: bold;">
                <tr>
                    <td> User ID:</td>
                    <td>
                        <input type="text" name="uid" value="<?php echo "$row[uid]"; ?>" readonly>
                    </td>
                </tr>
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
                    <td> Address:</td>
                    <td>
                        <input type="text" id="address" name="address" value="<?php echo "$row[address]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Email:</td>
                    <td>
                        <input type="text" name="email" value="<?php echo "$row[email]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Phone Number:</td>
                    <td><input type="text" name="contact" value="<?php echo "$row[phone]"; ?>"></td>
                </tr>
                <tr>
                    <td> Username:</td>
                    <td><input type="text" name="username" value="<?php echo "$row[username]"; ?>"></td>
                </tr>
                <tr>
                    <td> Password:</td>
                    <td><input type="password" name="password" value="<?php echo "$row[password]";?>"></td>
                </tr>
            </table><br>
            <button type="submit" class="btn btn-xl btn-danger" name="submit" value="submit">Update</button>
        </form>
    </div>
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
<link href="assets/css/sindex.css" rel="stylesheet">

<style>
    td {
        padding: 10px;
    }

    table input {
        padding-left: 5px;
    }
</style>