<?php
if (isset($_POST['submit'])) {
    include 'dbconnect.php';
    $uid = $_POST['uid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE user SET uid = '$_POST[uid]', fname = '$_POST[fname]', lname = '$_POST[lname]', address = '$_POST[address]', email = '$_POST[email]', phone = '$_POST[contact]', 
            username = '$_POST[username]', password = '$_POST[password]' WHERE uid='$uid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("User updated!!"); window.location.href="listuser.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
