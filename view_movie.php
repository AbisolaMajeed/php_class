<?php 

		$db = mysqli_connect("localhost", "root", "", "student") or die(mysqli_error($db));

		$select = mysqli_query($db, "SELECT * FROM movie") or die(mysqli_error($db));


?>




<!DOCTYPE html>
<html>
<head>
	<title>View Movie</title>
</head>
<body>

	<a href="add_movie.php">Add Movie</a>
	<a href="view_movie.php">View Movie</a>
	<hr/>

	<table border="1">
		<tr>
			<th>Title</th><th>Producer</th><th>Director</th><th>Writer</th><th>Genre</th><th>Review</th><th>Release Year</th><th>Selling Price</th>
		</tr>

		<tr>
			<?php while($row = mysqli_fetch_array($select)){ ?>

			<td><?php echo $row[1] ?></td>
			<td><?php echo $row[2] ?></td>
			<td><?php echo $row[3] ?></td>
			<td><?php echo $row[4] ?></td>
			<td><?php echo $row['genre'] ?></td>
			<td><?php echo $row['review'] ?></td>
			<td><?php echo $row['release_year'] ?></td>
			<td><?php echo $row['selling_price'] ?></td>
			

		</tr>
		<?php } ?>

	</table>

	<?php echo "Number of Movies: ".mysqli_num_rows($select) ?>

</body>
</html>