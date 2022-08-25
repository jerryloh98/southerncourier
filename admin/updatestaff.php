<?php
if (isset($_POST['submit'])) {
    include 'dbconnect.php';
    $sid = $_POST['sid'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];   

    $sql = "UPDATE staff SET sid = '$_POST[sid]', name = '$_POST[name]', gender = '$_POST[gender]', contact = '$_POST[contact]', 
            username = '$_POST[username]', password = '$_POST[password]' WHERE sid='$sid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Staff updated!!"); window.location.href="liststaff.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
