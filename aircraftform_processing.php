<!DOCTYPE html>
<html>
<head>
	<title>Aircraft Registration Form</title>
</head>
<body>

	<?php

		echo "<h3 align='center'>Aircraft Registration Form</h3>";

		$type = $_POST['type'];
		$number =$_POST['number'];
		$time =$_POST['time'];
		$space =$_POST['space'];
		$size = $_POST['size'];
		$instructions = $_POST['instructions'];

		echo "<p><b>Type of Aircraft -</b> $type</p>";
		echo "<p><b>'N' Number -</b> $number</p>";
	?>

</body>
</html>