<?php
include_once 'dbconnect.php';

if (isset($_POST['sign_up']) != 0) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ((strlen($fname) == 0) || (strlen($lname) == 0) || (strlen($address) == 0) || (strlen($email) == 0) || (strlen($phone) == 0) || (strlen($username) == 0) || (strlen($password) == 0)) {
    echo '<script language="javascript">';
    echo 'alert("Please fill up all the fields")';
    echo '</script>';
  } else {
    // check username exist or not
    $query = "SELECT username FROM user WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    $count = mysqli_num_rows($result);

    if ($count == 0) {

      $query = "INSERT INTO user(fname, lname, address, email, phone, username, password) VALUES ('$fname','$lname','$address','$email','$phone','$username','$password')";

      mysqli_query($conn, $query);

      echo "Registration Successful! Redirecting you to Sign In Page.";
      header('Refresh: 2; URL = sign_in.php');
    } else {
      echo "Sorry, username exist in our system. :(";
      header('Refresh: 2; URL = sign_up.php');
    }
  }
}
