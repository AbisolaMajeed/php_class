<?php

		$db = mysqli_connect("localhost", "root", "", "student") or die(mysqli_error($db))


?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Movie</title>
</head>
<body>
		<a href="add_movie.php">Add Movie</a>
		<a href="view_movie.php">View Movie</a>
		<hr/>

		<h3>Movie Registration Form</h3>
		<p>Please fill the form fields below</p>

			<?php 

			if(array_key_exists('add', $_POST))
			{
				$error = array();

				if(empty($_POST['title']))
				{
					$error[] = "Enter Movie Title";
				} else {
					$title = mysqli_real_escape_string($db, $_POST['title']);
				}

				if(empty($_POST['pro']))
				{
					$error[] = "Enter Movie Producer";
				} else
				{
					$producer = mysqli_real_escape_string($db, $_POST['pro']);
				}

				if(empty($_POST['dir']))
				{
					$error[] = "Enter Movie Director";
				} else
				{
					$director = mysqli_real_escape_string($db, $_POST['dir']);
				}

				if(empty($_POST['wri']))
				{
					$error[] = "Enter Movie Writer";
				} else
				{
					$writer = mysqli_real_escape_string($db, $_POST['wri']);
				}

				if(empty($_POST['category']))
				{
					$error[] = "Select Movie category";
				} else
				{
					$category = mysqli_real_escape_string($db, $_POST['category']);
				}

				if(empty($_POST['review']))
				{
					$error[] = "Enter Movie Review";
				} else
				{
					$review = mysqli_real_escape_string($db, $_POST['review']);
				}

				if(empty($_POST['year']))
				{
					$error[] = "Enter Movie Release Year";
				} else
				{
					$year = mysqli_real_escape_string($db, $_POST['year']);
				}

				if(empty($_POST['price']))
				{
					$error[] = "Enter Movie Price";
				} else
				{
					$price = mysqli_real_escape_string($db, $_POST['price']);
				}

					if(empty($error))
					{
						//WE NOW INSERT INTO THE DB
						$insert = mysqli_query($db, "INSERT INTO movie
													VALUES(NULL,
															'".$title."',
															'".$producer."',
															'".$director."',
															'".$writer."',
															'".$category."',
															'".$review."',
															'".$year."',
															'".$price."'
													)") or die(mysqli_error($db));
						echo "<h5>Movie Successfully Added</h5>";
					} else {
						foreach($error as $error)
						{
							echo "<p>*$error</p>";
						}
					}




			}

			?>

		<form action="" method="post">

		<p>Title: <input type="text" name="title"/></p>
		<p>Producer: <input type="text" name="pro"/></p>
		<p>Director: <input type="text" name="dir"/></p>
		<p>Writer: <input type="text" name="wri"/></p>

		<?php $genre = array("Adventure", "Thriller", "Sci-fi", "Drama", "Comedy")?>
		<p>Genre: <select name="category">
					<option valuue="">Select Movie Genre</option>

				<?php foreach($genre as $genre){ ?>

			<option value="<?php echo $genre ?>"><?php echo $genre ?></option>

			<?php  }?>

			
		</select></p>

		<p>Review: <br/><textarea name="review" rows="10" cols="20"></textarea></p>
		<p>Release Year: <select name="year">
							<option value="">Select Movie Release Year</option>
						<?php for($yr=2001; $yr<=2020; $yr++){ ?>

			<option value="<?php echo $yr ?>"><?php echo $yr ?></option>

				<?php } ?>
			
		</select></p>

		<p>Selling Price: <input type="text" name="price"/></p>
		<input type="submit" name="add" value="Click to add"/>
			

		</form>

</body>
</html>