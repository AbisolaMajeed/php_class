<!DOCTYPE html>
<html>
<head>
	<title>Movie Registration Form</title>
</head>
<body>


		<h3>Movie Registration Form</h3>
		<p>Please fill the form fields below</p>

		<?php

				if(isset($_POST['reg']))
				{
					$error = array();

					if(empty($_POST['title']))
					{
						$error['title'] = "Enter Movie Title";
					} else {
						$title = $_POST['title'];
					}

					if(empty($_POST['dir']))
					{
						$error['dir'] = "Enter Movie Director";
					} else {
						$director = $_POST['dir'];
					}

					if(empty($_POST['prod']))
					{
						$error['prod'] = "Enter Movie Producer";
					} else {
						$producer = $_POST['prod'];
					};

					if(empty($_POST['category']))
					{
						$error['cate'] = "Select Movie Category";
					} else {
						$category =$_POST['category'];
					}

					if(empty($_POST['review']))
					{
						$error['review'] = "Enter Movie Review";
					} else {
						$review = $_POST['review'];
					}

					if (empty($error))
					{
						echo "<hr/><p>Movie Title: $title</p>";
						echo "<p>Movie Director: $director</p>";
						echo "<p>Movie Producer: $producer</p>";
						echo "<p>Movie Category: $category</p>";
						echo "<p>Review: $review</p>";
					}

				}


		?>

		<form action="" method="post">
			<p>Movie Title: <input type="text" name="title"
			 value="<?php if(isset($title)) echo $title; ?>"
			/><?php if(isset($error['title'])) echo $error['title']?></p>

			<p>Movie Director: <input type="text" name="dir" 
			value="<?php if(isset($director)) echo $director; ?>"
			/><?php if(isset($error['dir'])) echo $error['dir']?></p>

			<p>Movie Producer: <input type="text" name="prod"
			value="<?php if(isset($producer)) echo $producer; ?>"
			/><?php if(isset($error['prod'])) echo $error['prod']?></p>

			<?php $genre = array("Adventure", "Thriller", "Sci-fi", "Drama", "Comedy") ?>
			<p>Movie Category: <select name="category">

				<option value="">Select Movie Category</option>
				<?php foreach($genre as $genre){?>
				<option value="<?php echo $genre ?>" <?php if(isset($category) && ($category == $genre)) echo 'selected="selected"'?>>
				<?php echo $genre ?></option>

				<?php } ?>

			</select> <?php if(isset($error['cate'])) echo $error['cate']?>
			</p>
			<p>Movie Review: <br/>
			<textarea name="review" rows="20" cols="30"><?php if(isset($review)) echo $review ?></textarea>
			<?php if(isset($error['review'])) echo $error['review']?>
			</p>
			<input type="submit" name="reg" value="Click to Register"/>
			

		</form>




</body>
</html>