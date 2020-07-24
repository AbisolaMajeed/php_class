<!DOCTYPE html>
<html>
<head>
	<title>Form Processing</title>
</head>
<body>


		<?php

				//echo $_POST['fname']."<br/>";
				//echo $_POST['lname']."<br/>";
				//echo $_POST['sex']."<br/>";
				//echo $_POST['address']."<br/>";

			//CREATING SHORTHAND VARIABLLES FOR THE ABOVE

			$firstname = $_POST['fname'];
			$lname = $_POST['lname'];
			$sex = $_POST['sex'];
			$address = $_POST['address'];
			$state = $_POST['state'];

			// if($sex == "Male"){
			// 	echo "<p>Thank you, Mr $firstname $lname for registering . We'll send your parcel to $address</p>";
			// }
			// else{
			// 	echo "<p>Thank you, Madam $firstname $lname for registering. We'll send your parcel to $address</p>";
			// }

			if($sex =="Male")
			{
				echo "<p>Hello Sir, thanks for registering. Below are your Details</p>";
				echo "<p>Name: <strong>$firstname $lname</strong></p>";
				echo "<p>Address: <strong>$address</strong>";
				echo "<p>State of Origin: <strong>$state</strong></p>";
			}else {
				echo "<p>Hello Ma, thanks for registering. Below are your details</p>";
				echo "<p>Name: <strong>$firstname $lname</strong></p>";
				echo "<p>Address: <strong>$address</strong>";
				echo "<p>State of Origin: <strong>$state</strong></p>";
			}




		?>

</body>
</html>