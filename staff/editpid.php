<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Parcel</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "sheader.php"; ?>

<body>
    <div class="container">
        <?php
        include_once 'dbconnect.php';
        $pid = $_GET['pid'];
        $sql = "SELECT * FROM parcel WHERE pid=$pid";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        ?>
        <!-- <h1><?php echo "$row[lname]  $row[fname]"; ?></h1> -->
        <form action="updateparcel.php" method="POST">
            <table style="border: none; font-family: Arial; font-weight: bold;">
                <tr>
                    <td> Parcel ID:</td>
                    <td>
                        <input type="text" name="pid" value="<?php echo "$row[pid]"; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td> Tracking Number:</td>
                    <td>
                        <input type="text" name="trackingNo" value="<?php echo "$row[trackingNo]"; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td> Status:</td>
                    <td>
                        <select name="status" id="status">
                            <?php
                            $sql = "SELECT distinct(status) FROM parcel";
                            $results = $conn->query($sql);
                            while ($rs = $results->fetch_assoc()) {
                            ?>
                                <option value="<?php echo $rs["status"]; ?>"><?php echo $rs["status"]; ?></option>
                                <option value="Shipped">Shipped</option>
                                <option value="Delivered">Delivered</option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> Sender Name:</td>
                    <td>
                        <input type="text" name="Sname" value="<?php echo "$row[Sname]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Sender Email:</td>
                    <td>
                        <input type="text" name="Semail" value="<?php echo "$row[Semail]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Sender Number:</td>
                    <td>
                        <input type="numeric" maxlength="11" name="Snumber" value="<?php echo "$row[Snumber]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Sender Address:</td>
                    <td>
                        <input type="numeric" name="Saddress" value="<?php echo "$row[Saddress]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Sender Postcode:</td>
                    <td>
                        <input type="numeric" maxlength="5" name="Spostcode" value="<?php echo "$row[Spostcode]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Sender State:</td>
                    <td>
                        <input type="text" name="Sstate" value="<?php echo "$row[Sstate]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Sender City:</td>
                    <td>
                        <input type="text" name="Scity" value="<?php echo "$row[Scity]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Send Date:</td>
                    <td>
                        <input type="date" name="Sdate>" value="<?php echo "$row[Sdate]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Receiver Name:</td>
                    <td>
                        <input type="text" name="Rname" value="<?php echo "$row[Rname]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Receiver Email:</td>
                    <td>
                        <input type="text" name="Remail" value="<?php echo "$row[Remail]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Receiver Number:</td>
                    <td>
                        <input type="numeric" maxlength="11" name="Rnumber" value="<?php echo "$row[Rnumber]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Receiver Address:</td>
                    <td>
                        <input type="numeric" name="Raddress" value="<?php echo "$row[Raddress]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Receiver Postcode:</td>
                    <td>
                        <input type="numeric" maxlength="5" name="Rpostcode" value="<?php echo "$row[Rpostcode]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Receiver State:</td>
                    <td>
                        <input type="text" name="Rstate" value="<?php echo "$row[Rstate]"; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Receiver City:</td>
                    <td>
                        <input type="text" name="Rcity" value="<?php echo "$row[Rcity]"; ?>">
                    </td>
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

    #address {
        overflow-y: auto;
        overflow-wrap: break-word;
        width: 30cm;
    }
</style>