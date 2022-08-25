<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>
<script type="text/javascript"></script>

<body>
	<?php
	require_once("dbconnect.php");
	$query = "SELECT * FROM branch WHERE City = '" . $_POST["cityid"] . "'";
	$results = $conn->query($query);
	?>
	<option value="" selected disabled hidden>Select Branch</option>
	<?php
	while ($rs = $results->fetch_assoc()) {
	?>
		<option value="<?php echo $rs["bid"]; ?>"><?php echo $rs["name"] . " - " . $rs["city"]; ?></option>
	<?php

	}
	?>
</body>

</html>