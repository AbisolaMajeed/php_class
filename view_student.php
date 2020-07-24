<?php 

		$db = mysqli_connect("localhost", "root", "", "sample") or die(mysqli_error($db));

		$select = mysqli_query($db, "SELECT * FROM student") OR die(mysqli_error($db));

?>




<!DOCTYPE html>
<html>
<head>
	<title>View Student</title>
</head>
<body>

	<a href="add_student.php">Add Student</a>
	<a href="view_student.php">View Student</a>

	<hr/>
	<table border="1">
		<tr>
			<th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Gender</th><th>Email</th><th>Mobile Number</th><th>Address</th><th>City</th><th>State</th><th>Country</th><th>Hobbies</th><th>Course</th>
		</tr>
		<tr>
			<?php while($row = mysqli_fetch_array($select)){ ?>

			<td><?php echo $row[1]?></td>
			<td><?php echo $row[2]?></td>
			<td><?php echo $row[3]?></td>
			<td><?php echo $row[4]?></td>
			<td><?php echo $row[5]?></td>
			<td><?php echo $row[6]?></td>
			<td><?php echo $row[7]?></td>
			<td><?php echo $row[7]?></td>
			<td><?php echo $row[8]?></td>
			<td><?php echo $row[9]?></td>
			<td><?php echo $row['country']?></td>
			<td><?php echo $row['hobbies']?></td>
			<td><?php echo $row['course']?></td>
		</tr>

			<?php }?>
		



	</table> 

</body>
</html>