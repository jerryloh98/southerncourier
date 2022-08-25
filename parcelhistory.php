<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>History</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "uheader.php"; ?>

<body>
    <center>
        <?php
        $username = $_SESSION['username'];
        $sql = "SELECT * FROM parcel WHERE username ='" . $username . "' order by Timestamp desc";
        $result = mysqli_query($conn, $sql);
        echo "<table>
            <tr>
                <th>Shipping Date Time</th>
                <th>Tracking No.</th>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Status</th>
            </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Timestamp'] . "</td>";
            echo "<td>" . $row['trackingNo'] . "</td>";
            echo "<td>" . $row['Sname'] . "</td>";
            echo "<td>" . $row['Rname'] . "</td>";
            echo "<td>" . $row['Status'] . "</td>";
            echo "</tr>";
        }
        ?>
    </center>
    <?php
    include "footer.php";
    ?>
</body>

</html>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/source.bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/source.bootstrap.min.css" rel="stylesheet">
<link href="assets/css/table.css" rel="stylesheet">

<style>
    tr:nth-child(odd) td {
        background-color: rgb(255, 104, 0, 0.2);
    }
</style>