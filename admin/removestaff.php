<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Staff</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "aheader.php"; ?>

<body>
    <center>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br>
            Select Staff ID:
            <?php
            require_once('dbconnect.php');
            $staff_result = $conn->query('SELECT * FROM staff ORDER BY SID ASC');
            ?>
            <center>
                <select name="sid">
                    <option value="">---Select Staff ID---</option>
                    <?php
                    if ($staff_result->num_rows > 0) {
                        while ($row = $staff_result->fetch_assoc()) {
                    ?>
                            <option value="<?php echo $row["sid"]; ?>"><?php echo $row["sid"]; ?></option>
                    <?php
                        }
                    }
                    ?><br>
                </select>
            </center>
            <br>
            <button type="submit" name="SubmitSID">Remove by Staff ID</button><br><br>
            <br>---------OR---------<br>
            <br><br>
            Select Staff Name:
            <br>
            <?php
            require_once('dbconnect.php');
            $staff_result = $conn->query('SELECT * FROM staff ORDER BY SID ASC');
            ?>
            <center>
                <select name="staffname">
                    <option value="">---Select Staff Name---</option>
                    <?php
                    if ($staff_result->num_rows > 0) {
                        while ($row = $staff_result->fetch_assoc()) {
                    ?>
                            <option value="<?php echo $row["sid"]; ?>">
                                <?php echo $row["name"]; ?></option>
                    <?php
                        }
                    }
                    ?>
                    <br>
                </select>
            </center>
            <br>
            <button type="submit" name="SubmitSN">Remove by Staff Name</button>
        </form>
    </center>

    <?php
    include 'dbconnect.php';
    if (isset($_POST['SubmitSID'])) {
        $sid = $_POST['sid'];
        $sql = "DELETE FROM staff WHERE SID = $sid";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Staff deleted successfully."); window.location.href="removestaff.php"</script>';
        } else {
            echo '<script>alert("Error while deleting staff!")</script>' . mysqli_error($conn);
        }
    }
    if (isset($_POST['SubmitSN'])) {
        $sid = $_POST['staffname'];
        $sql = "DELETE FROM staff WHERE SID = $sid";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Staff deleted successfully."); window.location.href="removestaff.php"</script>';
        } else {
            echo '<script>alert("Error while deleting staff!")</script>' . mysqli_error($conn);
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