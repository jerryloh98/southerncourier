<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>
<script type="text/javascript"></script>

<body>
	<?php
	require_once("dbconnect.php");
	$query = "SELECT * FROM state_city WHERE State = '" . $_POST["stateid"] . "'order by city ASC";
	$result = $conn->query($query);
	
	?>
	<option value="none" selected hidden>Select City</option>
	
	<?php
	
	while ($rs = $result->fetch_assoc()) {
	
	?>
		<option value="<?php echo $rs["city"]; ?>"><?php echo $rs["city"]; ?></option>
	<?php

	}
	?>
</body>

</html>