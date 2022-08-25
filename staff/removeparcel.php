<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Parcel</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "sheader.php"; ?>

<body>
    <center>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br>
            Select Parcel ID:
            <?php
            require_once('dbconnect.php');
            $parcel_result = $conn->query('SELECT * FROM parcel ORDER BY PID ASC');
            ?>
            <center>
                <select name="pid">
                    <option value="">---Select Parcel ID---</option>
                    <?php
                    if ($parcel_result->num_rows > 0) {
                        while ($row = $parcel_result->fetch_assoc()) {
                    ?>
                            <option><?php echo $row["pid"]; ?></option>
                    <?php
                        }
                    }
                    ?><br>
                </select>
            </center>
            <br>
            <button type="submit" name="SubmitPID">Remove by Parcel ID</button><br><br>
            <br>---------OR---------<br>
            <br><br>
            Select Parcel Tracking Number:
            <br>
            <?php
            require_once('dbconnect.php');
            $parcel_result = $conn->query('SELECT * FROM parcel ORDER BY PID ASC');
            ?>
            <center>
                <select name="trackingno">
                    <option value="">---Select Parcel Tracking Number---</option>
                    <?php
                    if ($parcel_result->num_rows > 0) {
                        while ($row = $parcel_result->fetch_assoc()) {
                    ?>
                            <option value="<?php echo $row["pid"]; ?>"><?php echo $row["trackingNo"] . ", " . "  Sender: " . $row["Sname"] . " >>> Receiver: " . $row["Rname"]; ?></option>
                    <?php
                        }
                    }
                    ?>
                    <br>
                </select>
            </center>
            <br>
            <button type="submit" name="SubmitPTN">Remove by Parcel Tracking Number</button>
        </form>
    </center>

    <?php
    include 'dbconnect.php';
    if (isset($_POST['SubmitPID'])) {
        $pid = $_POST['pid'];
        $sql = "DELETE FROM parcel WHERE PID = $pid";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Parcel deleted successfully."); window.location.href="removeparcel.php"</script>';
        } else {
            echo '<script>alert("Error while deleting parcel!")</script>' . mysqli_error($conn);
        }
    }
    if (isset($_POST['SubmitPTN'])) {
        $pid = $_POST['trackingno'];
        $sql = "DELETE FROM parcel WHERE PID = $pid";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Parcel deleted successfully."); window.location.href="removeparcel.php"</script>';
        } else {
            echo '<script>alert("Error while deleting parcel!")</script>' . mysqli_error($conn);
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