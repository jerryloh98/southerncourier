<?php
if (isset($_POST['submit'])) {
    include 'dbconnect.php';
    $pid = $_POST['pid'];
    $status = $_POST['status'];
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
    $weight = $_POST['weight'];
    $content = $_POST['content'];
    $price = $_POST['price'];
    
    $sql = "UPDATE parcel SET Status = '$_POST[status]', Sname = '$_POST[Sname]', Semail = '$_POST[Semail]', Snumber = '$_POST[Snumber]', Saddress = '$_POST[Saddress]', Spostcode = '$_POST[Spostcode]', Sstate = '$_POST[Sstate]', Scity = '$_POST[Scity]', Sdate = '$_POST[Sdate]', 
            Rname = '$_POST[Rname]', Remail = '$_POST[Remail]', Rnumber = '$_POST[Rnumber]', Raddress = '$_POST[Raddress]', Rpostcode = '$_POST[Rpostcode]', Rstate = '$_POST[Rstate]', Rcity = '$_POST[Rcity]', 
            weight = '$_POST[weight]', content = '$_POST[content]', price = '$_POST[price]' WHERE pid='$pid'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("Parcel updated!!"); window.location.href="listparcel.php";</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
