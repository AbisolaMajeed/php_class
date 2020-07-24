<?php
		

		$mn = mysqli_connect("localhost", "root", "", "sample") or die(mysqli_error($mn));

		$select = mysqli_query($mn, "SELECT * FROM customer") or die (mysqli_error($mn));

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Movie</title>
</head>
<body>

		<a href="add_customer.php">Add Customer</a>
		<a href="view_customer.php">View Customer</a>

		<table border="1">
			<tr>
				<th>Customer Last Name</th><th>Customer First Name</th><th>Mobile Number</th><th>Date of Birth</th><th>Gender</th><th>Nationality</th><th>Passport No.</th><th>Email</th><th>Address</th><th>City</th><th>State</th><th>Account No.</th><th>Account Type</th><th>Next Of Kin Lastname</th><th>Next of Kin Other Names</th><th>Next of Kin Mobile Number</th><th>ID Proof Number</th><th>ID Proof Type</th><th>Registering Agent Name</th>
			</tr>
			<tr>
				<?php while($row = mysqli_fetch_array($select)){?>

				<td><?php echo $row[1]?></td>
				<td><?php echo $row['other_names']?></td>
				<td><?php echo $row['mobile_number']?></td>
				<td><?php echo $row['date_of_birth']?></td>
				<td><?php echo $row['gender']?></td>
				<td><?php echo $row['nationality']?></td>
				<td><?php echo $row['passport_no']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['address']?></td>
				<td><?php echo $row['city']?></td>
				<td><?php echo $row['state']?></td>
				<td><?php echo $row['account_no']?></td>
				<td><?php echo $row['account_type']?></td>
				<td><?php echo $row['next_of_kin_lastname']?></td>
				<td><?php echo $row['next_of_kin_othername']?></td>
				<td><?php echo $row['next_of_kin_mobile_number']?></td>
				<td><?php echo $row['id_proof_no']?></td>
				<td><?php echo $row[18]?></td>
				<td><?php echo $row[19]?></td>
			</tr>

		<?php } ?>

		</table>

</body>
</html>