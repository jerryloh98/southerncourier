<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Branch</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "aheader.php"; ?>

<script>
    function getCity(val) {
        $.ajax({
            type: "POST",
            url: "getcity.php",
            data: 'stateid=' + val,
            success: function(data) {
                $("#city").html(data);
            }
        });
    }
</script>

<body>
    <center>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br>
            Name: <input type="text" name="name" required>
            <br>
            Address: <input type="text" name="address" required>
            <br>
            State:
            <select name="state" onChange="getCity(this.value);" required>
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
            City:
            <select id="city" name="city" required>
                <option value="">Select City</option>
            </select>
            <br>
            Phone Number: <input type="number" name="contact" minlength="8" maxlength="11" required>
            <br>
            <button type="submit" name="Submit">Add</button>
        </form>
    </center>

    <?php
    if (isset($_POST['Submit'])) {
        if (!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['state']) && !empty($_POST['city']) && !empty($_POST['contact']))
            newBranch();
        else
            echo '<script>alert("Please Fill In All Values!")</script>';
    }

    function newBranch()
    {
        include 'dbconnect.php';
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $contact = $_POST['contact'];
        $sql = "INSERT INTO branch (Name, Address, City, State, Contact) VALUES ('$name','$address','$city','$state','$contact')";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Branch added successfully!!")</script>';
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
<link href="assets/css/aindex.css" rel="stylesheet">
<link href="assets/css/admin.css" rel="stylesheet">