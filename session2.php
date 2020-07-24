<?php
		
		session_start();

		$fn = $_SESSION]['firstname'];
		$ln = $_SESSION['lastname'];
		$college = $_SESSION['college'];
		
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php
		echo "Name: ".$_SESSION['firstname'].' '.$_SESSION['lastname'].'<br/>';
		echo "College: ".$_SESSION['college'].'<br/>';

		?>

</body>
</html>