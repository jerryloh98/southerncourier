<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove User</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "sheader.php"; ?>

<body>
    <center>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br>
            Select User ID:
            <?php
            require_once('dbconnect.php');
            $user_result = $conn->query('SELECT * FROM user ORDER BY UID ASC');
            ?>
            <center>
                <select name="uid">
                    <option value="">---Select User ID---</option>
                    <?php
                    if ($user_result->num_rows > 0) {
                        while ($row = $user_result->fetch_assoc()) {
                    ?>
                            <option><?php echo $row["uid"]; ?></option>
                    <?php
                        }
                    }
                    ?><br>
                </select>
            </center>
            <br>
            <button type="submit" name="SubmitUID">Remove by User ID</button><br><br>
            <br>---------OR---------<br>
            <br><br>
            Select User Name:
            <br>
            <?php
            require_once('dbconnect.php');
            $user_result = $conn->query('SELECT * FROM user ORDER BY UID ASC');
            ?>
            <center>
                <select name="name">
                    <option value="">---Select User Name---</option>
                    <?php
                    if ($user_result->num_rows > 0) {
                        while ($row = $user_result->fetch_assoc()) {
                    ?>
                            <option value="<?php echo $row["uid"]; ?>"><?php echo $row["fname"] . " " . $row["lname"] . " --- Username = " . $row["username"]; ?></option>
                    <?php
                        }
                    }
                    ?>
                    <br>
                </select>
            </center>
            <br>
            <button type="submit" name="SubmitUN">Remove by User Name</button>
        </form>
    </center>

    <?php
    include 'dbconnect.php';
    if (isset($_POST['SubmitUID'])) {
        $uid = $_POST['uid'];
        $sql = "DELETE FROM user WHERE UID = $uid";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("User deleted successfully."); window.location.href="removeuser.php"</script>';
        } else {
            echo '<script>alert("Error while deleting user!")</script>' . mysqli_error($conn);
        }
    }
    if (isset($_POST['SubmitUN'])) {
        $uid = $_POST['name'];
        $sql = "DELETE FROM user WHERE UID = $uid";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("User deleted successfully."); window.location.href="removeuser.php"</script>';
        } else {
            echo '<script>alert("Error while deleting user!")</script>' . mysqli_error($conn);
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