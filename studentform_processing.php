<!DOCTYPE html>
<html>
<head>
	<title>STUDENT FORM PROCESSING</title>
</head>
<body>

		<?php

			echo "<h3>Stuudent Registration Form</h3>";

			$fname = $_POST['fname'];
			$lname =$_POST['lname'];
			$date = $_POST['date'];
			$sex =$_POST['sex'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$state=$_POST['state'];
			$country=$_POST['country'];
			$dr=$_POST['dr']; $si=$_POST['si']; $da=$_POST['da']; $sk=$_POST['sk'];
			$hobby=$_POST['hobby'];

			echo "<p><b>Name:</b> $fname $lname</p>";
			echo "<p><b>Date:</b> $date</p>";
			echo "<p><b>Gender:</b> $sex <b>Email:</b> $email";
			echo "<p><b>Address:</b> $address, $city, $country";
			echo "<p><b>Hobbies:</b> $dr $si $da $sk $hobby";

			$b1=$_POST['b1']; $b2=$_POST['b2']; $b3=$_POST['b3']; $b4=$_POST['b4'];
			$p1=$_POST['p1']; $p2=$_POST['p2']; $p3=$_POST['p3']; $p4=$_POST['p4'];
			$y1=$_POST['y1']; $y2=$_POST['y2']; $y3=$_POST['y3']; $y4=$_POST['y4'];

			echo "<table border=\"1\">";
			echo "<tr><th>S/No.</th><th>Examination</th><th>Board</th><th>Percentage</th><th>Year of Passing</th></tr>";
			echo "<tr><td>1</td><td>Class X</td><td>$b1</td><td>$p1</td><td>$y1</td></tr>";
			echo "<tr><td>2</td><td>Class XII</td><td>$b2</td><td>$p2</td><td>$y2</td></tr>";
			echo "<tr><td>3</td><td>Graduation</td><td>$b3</td><td>$p3</td><td>$y3</td></tr>";
			echo "<tr><td>4</td><td>Masters</td><td>$b4</td><td>$p4</td><td>$y4</td></tr>";
			echo "</table>";
		
			
			$status=$_POST['status'];

			echo "<p><b>Course Appplied For:</b> $status";

			




		?>
</body>
</html>