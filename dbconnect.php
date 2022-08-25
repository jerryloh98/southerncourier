<?php

$conn = mysqli_connect("localhost", "root", "", "courier");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}