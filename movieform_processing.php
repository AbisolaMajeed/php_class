<!DOCTYPE html>
<html>
<head>
	<title>Movie Registration Form</title>
</head>
<body>
	<?php


		$title = $_POST['title'];
		$director = $_POST['director'];
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$date = $_POST['date'];
		$hour = $_POST['hour'];
		$min = $_POST['min'];
		$am = $_POST['am'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$row = $_POST['row'];
		$seat = $_POST['seat'];


		echo "<h3>Free Movie Ticket Form </h3>";
		echo "<p><b>Movie title:</b> $title </p>";
		echo "<p><b>Directed by:</b> $director</p>";
		echo "<p><b>Name:</b> $firstname $lastname</p>";
		echo "<p><b>Date:</b> $date</p>";
		echo "<p><b>Time:</b> $hour: $min $am </p>";
		echo "<p><b>Address:</b> $address, $city, $state </p>";
		echo "<p><b>Row and Seat No:</b> $row and $seat</p>";






	?>

</body>
</html>