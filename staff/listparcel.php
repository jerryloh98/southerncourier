<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Parcel</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "sheader.php"; ?>

<body>
    <center>
        <?php
        $sql = "SELECT * FROM parcel order by PID ASC";
        $result = mysqli_query($conn, $sql);
        echo "<table>
            <tr>
            <th><center>PID</center></th>
            <th><center>Username</center></th>
            <th><center>Tracking No.</center></th>
            <th><center>Sender</center></th>
            <th><center>Receiver</center></th>
            <th><center>Status</center></th>
            <th><center>Action</center></th>
            </tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . "<center>" . $row['pid'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['Username'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['trackingNo'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['Sname'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row["Rname"] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['Status'] . "</center>" . "</td>";
            echo '<td><center><a href="editpid.php?pid=' . $row['pid'] . '">Edit</a></td>';
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($conn);
        ?>
    </center>
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

<style>
    table {
        width: 90%;
        border-collapse: collapse;
        border: 0px solid black;
        padding: 5px;
        font-size: 20px;
        margin-bottom: 10px;
    }

    th {
        border: 4px solid black;
        background-color: rgb(127, 147, 211);
        color: white;
        text-align: left;
    }


    td {
        border: 4px solid black;
        background-color: white;
        color: black;
    }

    tr:nth-child(odd) td {
        background-color: rgb(127, 147, 211, 0.3);
    }
</style>