<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shipping</title>
</head>

<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
?>
<?php include 'dbconnect.php'; ?>
<?php include "uheader.php"; ?>

<script>
    function getCity(val) {
        $.ajax({
            type: "POST",
            url: "getcity.php",
            data: 'stateid=' + val,
            success: function(data) {
                $("#city-list").html(data);
            }
        });
    }

    function getCityR(val) {
        $.ajax({
            type: "POST",
            url: "getcityR.php",
            data: 'stateid=' + val,
            success: function(data) {
                $("#Rcity-list").html(data);
            }
        });
    }

    function weightConverter(w) {
        if (w > 0 & w < 2) {
            document.getElementById("price").value = (w * 10.00).toFixed(2);
        } else if (w >= 2 & w <= 10) {
            document.getElementById("price").value = (w * 8.00).toFixed(2);
        } else if (w >= 11) {
            document.getElementById("price").value = (w * 7.00).toFixed(2);
        } else
            document.getElementById("price").value = 0
    }
</script>

<body>
    <form action="shipping.php" method="POST">
        <div class="sucontainer">
            <label id="details">Sender Details</label>
            <br>
            <label><b>Name:</b></label><br>
            <input type="text" placeholder="Sender Name" name="Sname" required /><br>

            <label><b>Email:</b></label><br>
            <input type="text" placeholder="Sender Email" name="Semail" required /><br>

            <label><b>Phone Number:</b></label><br>
            <input type="text" placeholder="Phone Number without dash(-)" maxlength="11" name="Snumber" onkeypress="return isNumberKey(event)" required /><br>
            <script>
                function isNumberKey(evt) {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                    return true;
                }
            </script>

            <label><b>Address:</b></label><br>
            <input type="text" placeholder="Sender Address" name="Saddress" required /><br>

            <label><b>Postcode:</b></label><br>
            <input type="numeric" placeholder="Sender Postcode" name="Spostcode" maxlength="5" required /><br>

            <label>State:</label><br>
            <select name="Sstate" id="state-list" class="demoInputBox" onChange="getCity(this.value);">
                <option value="none" selected disabled hidden>Select State</option>
                <?php
                $sql = "SELECT distinct(state) FROM state_city";
                $results = $conn->query($sql);
                while ($rs = $results->fetch_assoc()) {
                ?>
                    <option value="<?php echo $rs["state"]; ?>"><?php echo $rs["state"]; ?></option>
                <?php
                }
                ?>
            </select>
            <br>

            <label>City:</label><br>
            <select class="demoInputBox" id="city-list" name="Scity" required>
                <option value="">Select City</option>
            </select><br>

            <label><b>Pickup Date:</b></label><br>
            <input type="date" name="Sdate" min="<?php echo date('Y-m-d', strtotime('today')); ?>" max="<?php echo date('Y-m-d', strtotime('+7 days')); ?>" required><br><br>
            <div id="datestatus"> </div>

            <label id="details">Receiver Details</label>
            <br>
            <label><b>Name:</b></label><br>
            <input type="text" placeholder="Receiver Name" name="Rname" required /><br>

            <label><b>Email:</b></label><br>
            <input type="text" placeholder="Receiver Email" name="Remail" required /><br>

            <label><b>Phone Number:</b></label><br>
            <input type="text" placeholder="Phone Number without dash(-)" minlength="8" maxlength="11" name="Rnumber" onkeypress="return isNumberKey(event)" required /><br>
            <script>
                function isNumberKey(evt) {
                    var charCode = (evt.which) ? evt.which : event.keyCode
                    if (charCode > 31 && (charCode < 48 || charCode > 57))
                        return false;
                    return true;
                }
            </script>

            <label><b>Address:</b></label><br>
            <input type="text" placeholder="Receiver Address" name="Raddress" required /><br>

            <label><b>Postcode:</b></label><br>
            <input type="numeric" placeholder="Receiver Postcode" name="Rpostcode" maxlength="5" required /><br>

            <label>State:</label><br>
            <select name="Rstate" id="state-list" class="demoInputBox" onChange="getCityR(this.value);">
                <option value="none" selected disabled hidden>Select State</option>
                <?php
                $sql = "SELECT distinct(state) FROM state_city";
                $result = $conn->query($sql);
                while ($rs = $result->fetch_assoc()) {
                ?>
                    <option value="<?php echo $rs["state"]; ?>"><?php echo $rs["state"]; ?></option>
                <?php
                }
                ?>
            </select>
            <br>
            <label>City:</label><br>
            <select class="demoInputBox" id="Rcity-list" name="Rcity" required>
                <option value="">Select City</option>
            </select>
            <br><br>
            <div class="box">
                <div class="weight" id="weight">Weight: <br><input type="number" step="0.01" placeholder="(in kg)" name="weight" oninput="weightConverter(this.value)" onchange="weightConverter(this.value)" required /><br></div>
                <div class="content">Parcel Content: <br><input type="text" placeholder="eg. electronics" name="content" required /><br></div>
                <div class="price">Price: <br>RM <input type="number" id="price" name="price" readonly></div><br>
            </div><br>
            <div class="submit" style="text-align: center;">
                <button type="submit" name="submit" value="Submit">Submit</button>
            </div>

            <?php

            if (isset($_POST['submit'])) {

                include 'dbconnect.php';
                $Sname = $_POST['Sname'];
                $Semail = $_POST['Semail'];
                $Snumber = $_POST['Snumber'];
                $Saddress = $_POST['Saddress'];
                $Spostcode = $_POST['Spostcode'];
                $Sstate = $_POST['Sstate'];
                $Scity = $_POST['Scity'];
                $Sdate = $_POST['Sdate'];
                $Rname = $_POST['Rname'];
                $Remail = $_POST['Remail'];
                $Rnumber = $_POST['Rnumber'];
                $Raddress = $_POST['Raddress'];
                $Rpostcode = $_POST['Rpostcode'];
                $Rstate = $_POST['Rstate'];
                $Rcity = $_POST['Rcity'];
                $trackingNo = rand(1, 10000000);
                $weight = $_POST['weight'];
                $content = $_POST['content'];
                $price = $_POST['price'];
                $username = $_SESSION['username'];
                $timestamp = date('Y-m-d H:i:s');
                $status = "Received by system! Awaiting Process";
                
                $sql = "INSERT INTO parcel (Username,Sname,Semail,Snumber,Saddress,Spostcode,Sstate,Scity,Sdate,Rname,Remail,Rnumber,Raddress,Rpostcode,Rstate,Rcity,trackingNo,weight,content,price,Timestamp,Status) 
                VALUES ('$username','$Sname','$Semail','$Snumber','$Saddress','$Spostcode','$Sstate','$Scity','$Sdate','$Rname','$Remail','$Rnumber','$Raddress','$Rpostcode','$Rstate','$Rcity','$trackingNo','$weight','$content','$price','$timestamp','$status') ";
                if (mysqli_query($conn, $sql)) {
                    echo '<script language="javascript">';
                    echo 'alert("New record has been added successfully!")';
                    echo '</script>';
                } else {
                    echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
                mysqli_close($conn);
            }
            ?>
        </div>
        <br>
    </form>
    <?php
    include "footer.php";
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
<link href="assets/css/index.css" rel="stylesheet">
<link href="assets/css/shipping.css" rel="stylesheet">

<style>
    .box {
        display: flex;
        font-weight: bold;
    }

    .weight {
        flex: 1;
    }

    .content {
        flex: 2;
    }

    .price {
        flex: 1;
    }

    .box input {
        text-align: center;
        font-weight: 200;
    }
</style>