<?php

		$mn = mysqli_connect("localhost", "root", "", "student") or die (mysqli_error($mn));

		$select = mysqli_query($mn, "SELECT * FROM book") or die (mysqli_error($mn));


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Book</title>
</head>
<body>

	<a href="add_book.php">Add Book</a>
	<a href="view_book.php">View Book</a>
	<hr/>

	<table border = "1">
		<tr>
			<th>Author</th><th>Title</th><th>ISBN</th><th>Publisher</th><th>Category</th><th>Date Of Publication</th>
		</tr>
		
		<tr>
			<?php while($row = mysqli_fetch_array($select)){ ?>

				<td><?php echo $row[1] ?></td>
				<td><?php echo $row[2] ?></td>
				<td><?php echo $row[3] ?></td>
				<td><?php echo $row['publisher'] ?></td>
				<td><?php echo $row['category'] ?></td>
				<td><?php echo $row['date_of_publication'] ?></td>
			
		</tr>
	<?php }?>



	</table>


</body>
</html>