<?php 
	
		$db = mysqli_connect("localhost", "root", "", "student") or die(mysqli_error($db));

?>
<!DOCTYPE html>
<html>
<head>
	<title>File Uploads</title>
</head>
<body>

		<a href="f_upload.php">Upload File</a>
		<a href="v_upload.php">View Uploaded Files</a>
		<hr/>

		<?php 

				$max_size = 2097152;
				$extension = array("image/jpg", "image/jpeg", "image/png");

				if(array_key_exists('register', $_POST))

						{	
							$error = array();

							if(!in_array($_FILES['upload']['type'], $extension))
							{
								$error[] = "File not acceptable";
							}

							if($_FILES['upload']['size'] > $max_size)
							{
								$error[] = "File is too large. Maximum Size: ".$max_size
									;
							}

						$filename = str_replace(" ", "_", $_FILES['upload']['name'])
									;

						$destination = 'images/'.$filename;

				if(!move_uploaded_file($_FILES['upload']['tmp_name'], $destination))
							{
								$error[] = "File Not Successfully Added";
							}

							if(empty($_POST['item']))
							{
								$error[] = "You have not entered Item Name";
							} else {
								$item_name = mysqli_real_escape_string($db, $_POST['item']);
							}

							if(empty($_POST['description']))
							{
								$error[] = "You have not entered Item Description";
							} else {
							$description = mysqli_real_escape_string($db, $_POST['description']);
							}

							if(empty($error))

						{
							$insert = mysqli_query($db, "INSERT INTO item VALUES(NULL,
																			'".$item_name."',
																			'".$description."',
																			'".$filename."'
																		)")
							or die(mysqli_error($db));
							echo "<h3>Record Successfully Added</h3>";
						} else {
							foreach($error as $err)
							{
								echo "<p>*$err</p>";
							}
						}

				}

		?>

		<h3>Item Registration Form</h3>
		<p>Please fill the form fields below</p>

		<form enctype="multipart/form-data" action="" method="post">

				<p>Item Name: <input type="text" name="item"/></p>
				<p>Item Description: <input type="text" name="description"/></p>
				<p>Upload File: <input type="file" name="upload"/></p>
				<input type="submit" name="register" value="Click to Register"/>

		</form>

</body>
</html>