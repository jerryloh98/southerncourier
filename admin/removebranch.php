<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Branch</title>
</head>

<?php include 'dbconnect.php'; ?>
<?php include "aheader.php"; ?>

<body>
    <center>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <br>
            Select Branch ID:
            <?php
            require_once('dbconnect.php');
            $branch_result = $conn->query('SELECT * FROM branch ORDER BY BID ASC');
            ?>
            <center>
                <select name="bid">
                    <option value="">---Select Branch ID---</option>
                    <?php
                    if ($branch_result->num_rows > 0) {
                        while ($row = $branch_result->fetch_assoc()) {
                    ?>
                            <option value="<?php echo $row["bid"]; ?>"><?php echo $row["bid"]; ?></option>
                    <?php
                        }
                    }
                    ?><br>
                </select>
            </center>
            <br>
            <button type="submit" name="SubmitBID">Remove by Branch ID</button><br><br>
            <br>---------OR---------<br>
            <br><br>
            Select Branch Name:
            <br>
            <?php
            require_once('dbconnect.php');
            $branch_result = $conn->query('SELECT * FROM branch ORDER BY State, City, BID ASC');
            ?>
            <center>
                <select name="branchname">
                    <option value="">---Select Branch Name---</option>
                    <?php
                    if ($branch_result->num_rows > 0) {
                        while ($row = $branch_result->fetch_assoc()) {
                    ?>
                            <option value="<?php echo $row["bid"]; ?>">
                                <?php echo $row["name"] . ",  " . $row["state"] . " - " . $row["city"]; ?></option>
                    <?php
                        }
                    }
                    ?>
                    <br>
                </select>
            </center>
            <br>
            <button type="submit" name="SubmitBN">Remove by Branch Name</button>
        </form>
    </center>

    <?php
    include 'dbconnect.php';
    if (isset($_POST['SubmitBID'])) {
        $bid = $_POST['bid'];
        $sql = "DELETE FROM branch WHERE BID = $bid";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Branch deleted successfully."); window.location.href="removebranch.php";</script>';
        } else {
            echo '<script>alert("Error while deleting branch!")</script>' . mysqli_error($conn);
        }
    }
    if (isset($_POST['SubmitBN'])) {
        $bid = $_POST['branchname'];
        $sql = "DELETE FROM branch WHERE BID = $bid";

        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Branch deleted successfully."); window.location.href="removebranch.php"</script>';
        } else {
            echo '<script>alert("Error while deleting branch!")</script>' . mysqli_error($conn);
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