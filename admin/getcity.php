<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>
<script type="text/javascript"></script>

<body>
	<?php
	require_once("dbconnect.php");
	$query = "SELECT * FROM branch WHERE State = '" . $_POST["stateid"] . "'";
	$results = $conn->query($query);
	?>
	<option value="none" selected hidden>Select City</option>
	<?php
	while ($rs = $results->fetch_assoc()) {
	?>
		<option value="<?php echo $rs["city"]; ?>"><?php echo $rs["city"]; ?></option>
	<?php

	}
	?>
</body>

</html>