<?php
	
	$db = mysqli_connect("localhost", "root", "", "student") or die(mysqli_error($db));

	$select = mysqli_query($db, "SELECT * FROM item") or die(mysqli_error($db));


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Uploads</title>
</head>
<body>

		<a href="f_upload.php">Upload File</a>
		<a href="v_upload.php">View Uploaded Files</a>
		<hr/>

		<table border="1">
			<tr>
				<th>Item Name</th>
				<th>Item Description</th>
				<th>Image</th>
			</tr>

			<tr>
				<?php while($r = mysqli_fetch_array($select)) { ?>

				<td><?php echo $r[1] ?></td>
				<td><?php echo $r[2] ?></td>
				<td>
					<a href="details.php?id=<?php echo $r[0]; ?>">
				<img src="images/<?php echo $r[3] ?>" width="150" height="150"/>
				</a>

				</td>

			</tr>
				<?php } ?>

		</table>

</body>
</html>