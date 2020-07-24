<?php

	$db = mysqli_connect("localhost", "root", "", "student") or die(mysqli_error($db));

	$img_id = $_GET['id'];

	$select = mysqli_query($db, "SELECT * FROM item WHERE item_id='". $img_id."'") or die(mysqli_error($db));


?>

<!DOCTYPE html>
<html>
<head>
	<title>Item Details</title>
</head>
<body>

		<?php 

		//echo "Item ID: ".$img_id

		$result = mysqli_fetch_array($select);

		echo "<h3>Item Name: ".$result[1]."</h3>";
		echo "<img src=\"images/$result[3]\" height=\"500\" width=\"500\"/>";
		echo "<p>".$result[2]."</p>";


		?>

</body>
</html>