<?php

		session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

			<a href="session2.php">Click here to go to Session 2</a>
			<hr/>
			<?php


					$_SESSION['firstname'] = "James";
					$_SESSION['lastname'] = "Babalola";
					$_SESSION['college'] = "Babcock University";

					echo "Name: ".$_SESSION['firstname'].' '.$_SESSION['lastname'].'<br/>';
					echo "College: ".$_SESSION['college'].'<br/>';

			?>

</body>
</html>