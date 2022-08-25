<?php
if (isset($_POST['submit'])) {
    include 'dbconnect.php';
    $bid = $_POST['bid'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $contact = $_POST['contact'];

    $sql = "UPDATE branch SET bid = '$_POST[bid]', name = '$_POST[name]', address = '$_POST[address]', 
            city = '$_POST[city]', state = '$_POST[state]', contact = '$_POST[contact]' WHERE bid='$bid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Branch updated!!"); window.location.href="listbranch.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
