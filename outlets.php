<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Our Outlets</title>
</head>

<?php include 'dbconnect.php'; ?>

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

    function getBranch(val) {
        $.ajax({
            type: "POST",
            url: "getbranch.php",
            data: 'cityid=' + val,
            success: function(data) {
                $("#branch-list").html(data);
            }
        });
    }
</script>

<body>
    <?php include "header.php"; ?>
    <div class="sucontainer">
        <form action="outlets.php" method="POST">
            <label>State:</label><br>
            <select name="state" id="state-list" class="demoInputBox" onChange="getCity(this.value);">
                <option value="none" selected disabled hidden>Select State</option>
                <?php
                $sql = "SELECT distinct(state) FROM branch";
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
            <select class="demoInputBox" id="city-list" name="city" onchange="getBranch(this.value)">
                <option value="">Select City</option>
            </select><br>

            <label>Branch:</label><br>
            <select class="demoInputBox" id="branch-list" name="branch">
                <option value="">Select Branch</option>
            </select><br>

            <div class="submit">
                <button type="submit" name="submit" value="Submit">Submit</button>
            </div>

            <div class="submitoutput" style="text-align: left; position:relative; left:18%;">
                <?php
                include 'dbconnect.php';
                if (isset($_POST['submit'])) {
                    if (!empty($_POST['branch'])) {
                        $bid = $_POST['branch'];
                        $sql = "SELECT * FROM Branch WHERE bid=$bid";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);
                        echo "<br><b>Branch Name: </b>" . $row['name'] . "<br><b>Address: </b>" . $row['address'] . "<br><b>Contact Number: </b>" . $row['contact'] . "";
                    } else {
                        echo "<br>Error or No Branches selection!";
                    }
                }
                ?>
            </div>
        </form>
    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>

<!-- assets -->
<link rel="stylesheet" href="assets/css/side.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/source.bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/source.bootstrap.min.css" rel="stylesheet">
<link href="assets/css/index.css" rel="stylesheet">
<link href="assets/css/outlets.css" rel="stylesheet">