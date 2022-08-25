<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Staff</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "aheader.php"; ?>

<body>
    <div class="container">
        <?php
        include_once 'dbconnect.php';
        $sid = $_GET['sid'];
        $sql = "SELECT * FROM staff WHERE sid=$sid";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>
        <h1><?php echo "$row[name]"; ?></h1>
        <form action="updatestaff.php" method="POST">
            <table style="border: none; font-family: Arial; font-weight: bold;">
                <tr>
                    <td> Staff ID:</td>
                    <td>
                        <input type="text" name="sid" value="<?php echo "$row[sid]"; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td> Staff name:</td>
                    <td>
                        <input type="text" name="name" value="<?php echo "$row[name]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Gender:</td>
                    <td>
                        <input type="text" name="gender" value="<?php echo "$row[gender]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Contact Number:</td>
                    <td><input type="text" name="contact" value="<?php echo "$row[contact]"; ?>"></td>
                </tr>
                <tr>
                    <td> Username:</td>
                    <td><input type="text" name="username" value="<?php echo "$row[username]"; ?>"></td>
                </tr>
                <tr>
                    <td> Password:</td>
                    <td><input type="password" name="password" value="<?php echo "$row[password]"; ?>"></td>
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
<link href="assets/css/aindex.css" rel="stylesheet">

<style>
    td {
        padding: 10px;
    }

    table input {
        padding-left: 5px;
    }
</style>