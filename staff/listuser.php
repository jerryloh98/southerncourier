<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "sheader.php"; ?>

<body>
    <center>
        <?php
        $sql = "SELECT * FROM user order by UID ASC";
        $result = mysqli_query($conn, $sql);
        echo "<table>
            <tr>
            <th><center>UID</center></th>
            <th><center>Name</center></th>
            <th><center>Address</center></th>
            <th><center>Email</center></th>
            <th><center>Phone Number</center></th>
            <th><center>Username</center></th>
            <th><center>Action</center></th>
            </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . "<center>" . $row['uid'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['fname'] . " " . $row["lname"] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['address'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['email'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['phone'] . "</center>" . "</td>";
            echo "<td>" . "<center>" . $row['username'] . "</center>" . "</td>";
            echo '<td><center><a href="edituid.php?uid=' . $row['uid'] . '">Edit</a></td>';
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