<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


		<?php 

			print_r($_GET);
			echo "<hr/>";

			// echo "Page ID: ".$_GET['id'].'<br/>';
			// echo "Page Name: ".$_GET['name']."<br/>";

			$page_id = $_GET['id'];
			$page_name = $_GET['name'];

			echo "<p>Page ID: <strong>$page_id</strong></p>";
			echo "<p>Page Name: <strong>$page_name</strong></p>";


		?>

</body>
</html>