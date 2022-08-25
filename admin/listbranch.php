<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Branch</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "aheader.php"; ?>

<body>
    <center>
        <?php
        $sql = "SELECT * FROM branch order by BID ASC";
        $result = mysqli_query($conn, $sql);
        echo "<table>
            <tr>
                <th><center>BID</center></th>
                <th><center>Name</center></th>
                <th><center>Address</center></th>
                <th><center>City</center></th>
                <th><center>State</center></th>
                <th><center>Contact</center></th>
                <th><center>Action</center></th>
            </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . "<center>" . $row['bid'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['name'] . "</center>" . "</td>";
            echo "<td width='40%'>" . "<center>" . $row['address'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['city'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['state'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['contact'] . "</center>" . "</td>";
            echo '<td><center><a href="editbid.php?bid=' . $row['bid'] . '">Edit</a></td>';
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
<link href="assets/css/aindex.css" rel="stylesheet">

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
        background-color: rgb(0, 132, 255);
        color: white;
        text-align: left;
    }

    td {
        border: 4px solid black;
        background-color: white;
        color: black;
    }

    tr:nth-child(odd) td {
        background-color: rgb(90, 175, 255, 0.3);
    }
</style>