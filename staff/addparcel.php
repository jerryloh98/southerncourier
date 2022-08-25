<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Parcel</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "sheader.php"; ?>
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
    <center>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br>
            Username:
            <select name="username" id="username" class="demoInputBox">
                <?php
                $sql = "SELECT distinct(username) FROM user ORDER BY username ASC";
                $results = $conn->query($sql);
                while ($rs = $results->fetch_assoc()) {
                ?>
                    <option value="none" selected disabled hidden>Select username</option>
                    <option value="<?php echo $rs["username"]; ?>"><?php echo $rs["username"]; ?></option>
                <?php
                }
                ?>
            </select>
            <br>
            Sender Name: <input type="text" name="Sname" required />
            <br>
            Sender Email: <input type="text" name="Semail" required />
            <br>
            Sender Number: <input type="numeric" maxlength="11" name="Snumber" required />
            <br>
            Sender Address: <input type="text" name="Saddress" required />
            <br>
            Sender Postcode: <input type="numeric" name="Spostcode" maxlength="5" required />
            <br>
            State:
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
            City:
            <select class="demoInputBox" id="city-list" name="Scity" required>
                <option value="">Select City</option>
            </select>
            <br>
            Date:
            <input type="date" name="Sdate" min="<?php echo date('Y-m-d', strtotime('today')); ?>" max="<?php echo date('Y-m-d', strtotime('+7 days')); ?>" required>
            <br>
            Receiver Name: <input type="text" name="Rname" required />
            <br>
            Receiver Email: <input type="text" name="Remail" required />
            <br>
            Receiver Number: <input type="text" maxlength="11" name="Rnumber" required />
            <br>
            Receiver Address: <input type="text" name="Raddress" required />
            <br>
            Receiver Postcode: <input type="numeric" name="Rpostcode" maxlength="5" required />
            <br>
            State:
            <select name="Rstate" id="state-list" class="demoInputBox" onChange="getCityR(this.value);">
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
            City:
            <select class="demoInputBox" id="Rcity-list" name="Rcity" required>
                <option value="">Select City</option>
            </select>
            <br>
            Weight: <br><input type="number" step="0.01" name="weight" oninput="weightConverter(this.value)" onchange="weightConverter(this.value)" required />
            <br>
            Parcel Content: <br><input type="text" name="content" required />
            <br>
            Price (RM): <input type="number" id="price" name="price" placeholder="RM" readonly>
            <br>
            <button type="submit" name="Submit">Add</button>
        </form>
    </center>

    <?php
    if (isset($_POST['Submit'])) {
        if (
            !empty($_POST['username']) && !empty($_POST['Sname']) && !empty($_POST['Semail']) && !empty($_POST['Snumber']) && !empty($_POST['Saddress']) && !empty($_POST['Spostcode']) && !empty($_POST['Sstate']) && !empty($_POST['Scity']) && !empty($_POST['Sdate']) &&
            !empty($_POST['Rname']) && !empty($_POST['Remail']) && !empty($_POST['Rnumber']) && !empty($_POST['Raddress']) && !empty($_POST['Rpostcode']) && !empty($_POST['Rstate']) && !empty($_POST['Rcity']) &&
            !empty($_POST['weight']) && !empty($_POST['content']) && !empty($_POST['price'])
        )
            newParcel();
        else
            echo '<script>alert("Please Fill In All Values!")</script>';
    }


    function newParcel()
    {
        include 'dbconnect.php';
        $username = $_POST['username'];
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
        $timestamp = date('Y-m-d H:i:s');
        $status = "Received by system! Awaiting Process";
        $sql = "INSERT INTO parcel (Username, Sname, Semail, Snumber, Saddress, Spostcode, Sstate, Scity, Sdate, Rname, Remail, Rnumber, Raddress, Rpostcode, Rstate, Rcity, trackingNo, weight, content, price, Timestamp, Status) 
                VALUES ('$username','$Sname','$Semail','$Snumber','$Saddress','$Spostcode','$Sstate','$Scity','$Sdate','$Rname','$Remail','$Rnumber','$Raddress','$Rpostcode','$Rstate','$Rcity','$trackingNo','$weight','$content','$price','$timestamp','$status')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Parcel added successfully!!")</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="3;">';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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