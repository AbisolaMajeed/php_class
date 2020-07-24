<?php
		
		$mn = mysqli_connect("localhost", "root", "", "student") or die (mysqli_error($mn))

?>






<!DOCTYPE html>
<html>
<head>
	<title>Add Book</title>
</head>
<body>

		<a href="add_book.php">Add Book</a>
		<a href="view_book.php">View Book</a>
		<hr/>


		<h3>Book Registration Form</h3>
		<p>Please fill the form fields below</p>

		<?php
					
						if(array_key_exists('add', $_POST))
						{
								$error = array();

								if(empty($_POST['author']))
								{
									$error[] = 'Enter Book Author';
								}else {
									$author = mysqli_real_escape_string($mn, $_POST['author']);
								}
								if(empty($_POST['title']))
								{
									$error[] = 'Enter Book Title';
								} else{
									$title = mysqli_real_escape_string($mn, $_POST['title']);
								}
								if(empty($_POST['isbn']))
								{
									$error[] = 'Enter Book ISBN';
								} else{
									$isbn = mysqli_real_escape_string($mn, $_POST['isbn']);
								}
								if(empty($_POST['publisher']))
								{
									$error[] = 'Enter Book Publisher';
								} else{
									$publisher = mysqli_real_escape_string($mn, $_POST['publisher']);
								}
								if(empty($_POST['category']))
								{
									$error[] = 'Enter Book Category';
								} else{
									$category = mysqli_real_escape_string($mn, $_POST['category']);
								}
								if(empty($_POST['date']))
								{
									$error[] = 'Enter Date of Publication';
								} else{
									$date = mysqli_real_escape_string($mn, $_POST['date']);
								}

									if(empty($error))
								{

									$insert = mysqli_query($mn, "INSERT INTO book
																 VALUES (NULL, 
																 		'".$author."',
																 		'".$title."',
																 		'".$isbn."',
																 		'".$publisher."',
																 		'".$category."',
																 		'".$date."'
																 )") or die(mysqli_error($mn));
									echo "<h5>Book added successfully</h5>";

								} else{

									foreach($error as $error) 
									{
										echo "<p>*$error</p>";
									}
								} 

						}



			?>

		<form action="" method="post">

		<p>Book Author: <input type="text" name="author"/></p>
		<p>Book Title: <input type="text" name="title"/></p>
		<p>ISBN: <input type="text" name="isbn"/></p>
		<p>Book Publisher: <input type="text" name="publisher"/></p>

		<?php $category = array("Poetry", "Prose", "Drama") ?>
		<p>Book Category: <select name="category">
						<option value="">Select Book Category</option>

					<?php foreach ($category as $category){ ?>
						<option value = "<?php echo $category?>"> <?php echo $category ?></option>

					<?php }?>
			
		</select></p>

		<p>Date of Publication: <input type="date" name="date"/></p>

		<input type="submit" name="add"/>






		</form>
</body>
</html>