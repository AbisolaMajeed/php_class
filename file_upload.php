<!DOCTYPE html>
<html>
<head>
	<title>File Uploads</title>
</head>
<body>

			<?php 
				if(isset($_POST['submit']))
					{
					// 

				// echo "Filename: ". $_FILES['upload']['name']."<br/>";
				// echo "Filetype: ".$_FILES['upload']['type']."<br/>";
				// echo "Filesize: ".$_FILES['upload']['size']."<br/>";
				// echo "Temporary File Name: ".$_FILES['upload']['tmp_name'];

	// $extension = array("image/jpg", "image/jpeg", "image/png");

	// if(!in_array($_FILES['upload']['type'], $extension))
	// {
	// 	echo "This file is not acceptable";
	// } else {
	// 	echo "File is acceptable";
	// }echo var_dump($_FILES);

				// $extension = array("application/pdf", "application/vnd.openxmlformats-officedocument.wordprocessingml.document");
				// if(!in_array($_FILES['upload']['type'], $extension))
				// {
				// 	echo "This file is not acceptable";
				// } else {
				// 	echo "File is acceptable";
				// }

						$default_size = 2097152;
						//$filename = str_replace(" ", "_", $_FILES['upload']['name']);

						if($_FILES['upload']['size'] > $default_size)
								{
									// echo "$filename. File is too large tho";
									echo "File is too large tho";
								} else {
									//echo "$filename. File is within limit";
									$filename = str_replace(" ", "_", $_FILES['upload']['name']);

									$destination = 'images/'.$filename;

									if(move_uploaded_file($_FILES['upload']['tmp_name'], $destination))
									{
										echo "File Successfully Uploaded";
									}
								}
				}
			?>

		<form action="" method="post" enctype="multipart/form-data">

				<input type="file" name="upload"/>
				<br/>
				<input type="submit" name="submit" value="Click to Submit"/>
			
		</form>

</body>
</html>