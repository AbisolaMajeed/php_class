<!DOCTYPE html>
<html>
<head>
	<title>Movie Registration Form</title>
</head>
<body>
	<h3>Free Movie Ticket Form</h3>

	<?php
			if(isset($_POST['submit']))
			{
				$error = array();
				if(empty($_POST['title']))
				{
					$error[] = "Enter Movie Title";
				} else{
					$title = $_POST['title'];
				}
				if(empty($_POST['director']))
				{
					$error[] = "Enter Movie Director";
				} else {
					$director = $_POST['director'];
				}
				if(empty($_POST['fname']))
				{
					$error[] = "Enter your firstname";
				}  else{
					$fname = $_POST['fname'];
				}
				if(empty($_POST['lname']))
				{
					$error[] = "Enter your lastname";
				} else {
					$lname = $_POST['lname'];
				}
				if(empty($_POST['date']))
				{
					$error[] = $_POST['date'];
				} else{
					$date = $_POST['date'];
				}
				if(empty($_POST['hour']))
				{
					$error[] = "Select hour";
				} else{
					$hour = $_POST['hour'];
				}
				







			}




	?>

	<form action="movieform_processing.php" method="post">

	<p><b>Movie Title</b><br/><input type="text" name="title"/></p>

	<p><b>Directed by</b></br/><input type="text" name="director"/></p>
	<p>First Name<br/>
	<input type="text" name="fname"></p>
	<p>Last Name<br/>
	<input type="text" name="lname"></p>
	<p><b>Date</b><br/>
	<input type="Date" name="date">
	<p><b>Time</b><br/>
	<select name="hour">
		<option>Hour</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		</select> <select name="min">
					<option>Minutes</option>
					<option>00</option>
					<option>10</option>
					<option>20</option>
					<option>30</option>
					<option>40</option>
					<option>50</option>
				  </select> <select name="am">
				  				<option >AM</option>
				  				<option >PM</option>
				  </select></p>
	<p><b>Address</b><br/>
	<textarea name="address" cols="30"></textarea></p>
	<p><input type="text" name="city"><br/>
	City</p>
	<p><input type="text" name="state"><br/>
	State</p>
	
	<p><b>Row</b><br/>
	<input type="text" name="row" placeholder="ex:23"></p>
	<p><b>Seat Number</b><br/>
	<input type="text" name="seat" placeholder="ex: 23"></p>

	<input type="Submit" name="" value="Submit"/>
	
	</form>
</body>
</html>