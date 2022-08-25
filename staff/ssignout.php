<?php
session_start();
include_once 'dbconnect.php';
session_destroy();

   //echo 'Logged Out!';
header('Refresh: 1; URL = index.php');
?>