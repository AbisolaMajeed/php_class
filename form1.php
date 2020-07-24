<!DOCTYPE html>
<html>
<head>
	<title>Form Processing</title>
</head>
<body>

		<h1>User Registration Form</h1>
		<p>Please fill the form fields below</p>

			<?php
					 if(isset($_POST['register']))
						 {

						 		$error = array(); //WE INITIALIZE THE ERROR ARRAY

						 		//FNAME FIELD VALIDATION
						 		if(empty($_POST['fname']))
						 		{
						 			$error[] = "Please enter your firstname";
						 		}	else {
						 			$firstname = $_POST['fname'];
						 		}

						 		//LNAME FIELD VALIDATION
						 		if(empty($_POST['lname']))
						 		{
						 			$error[] = "Please enter your lastname";
						 		} else {
						 			$lname = $_POST['lname'];
						 		}

						 		//GENDER FIELD VALIDATION
						 		if(empty($_POST['sex']))
						 		{
						 			$error[] = "Please select your gender";
						 		} else {
						 			$gender = $_POST['sex'];
						 		}


						 		//ADDRESS FIELD VALIDATION
						 		if(empty($_POST['address']))
						 				{
						 					$error[] = "Please enter your address";
						 				} else {
						 					$address = $_POST['address'];
						 				}


						 		//STATE OF ORIGIN VALIDATION
						 		if(empty($_POST['state']))
						 				{
						 					$error[] = "Select State of Origin";
						 				} else {
						 					$state = $_POST['state'];
						 				}



						 		if(empty($error))   //IF ERROR ARRAY IS EMPTY - MEANING THERE'S NO ERROR
						 		{
						 			echo "<hr/><h5>Thanks for Registering. Below are your details</h5>";
						 			echo "<p>Name: <strong>$firstname $lname</strong></p>";
						 			echo "<p>Gender: <strong>$gender</strong></p>";
						 			echo "<p>Address: <strong>$address</strong></p>";
						 			echo "<p>State of Origin: <strong>$state</strong>";

						 			unset($firstname);
						 			unset($lname);
						 			unset($gender);
						 			unset($address);
						 			unset($state);

						 		}else {  //MEANS THE ERROR IS NOT EMPTY

						 			foreach ($error as $err)  //WE NOW LOOP THROUGH THE ERROR ARRAY
						 			{
						 				echo "<p>*$err</p>";
						 			}

						 		}


					 	 }


			?>

		<form action="" method="post">

			<p>Firstname: <input type="text" name="fname"
			value="<?php if(isset($firstname)){echo $firstname; } ?>" 
			/></p>
			<p>Lastname: <input type="text" name="lname"
			value="<?php if(isset($lname)) echo $lname; ?>" 
			/></p>
			<p>Gender: Male <input type="radio" name="sex" value="Male"
			<?php if(isset($gender) && ($gender == "Male")) echo 'checked="checked"' ?>
			/>
					   Female <input type="radio" name="sex" value="Female"
			<?php if(isset($gender) && ($gender == "Female")) echo 'checked="checked"' ?>
					   />
						</p>
			<p>Address: <br/>
	<textarea name="address" rows="5" cols="20"><?php if(isset($address)) echo $address ?></textarea>
				</p>


		<p>State of Origin: <select name="state">
									<option value="">Select State</option>
					<option value="OGN" <?php if(isset($state) && ($state =="OGN"))
					echo 'selected="selected"'?>>Ogun</option>

					<option value="KNO" <?php if(isset($state) && ($state =="KNO"))
					echo 'selected"selected"'?>>Kano</option>

					<option value="LAG" <?php if(isset($state) && ($state =="LAG"))
					echo 'selected="selected"'?>>Lagos</option>

					<option value="KDA" <?php if(isset($state) && ($state =="KDA"))
					echo 'seleced="selected"'?>>Kaduna</option>

					<option value="RIV"  <?php if(isset($sate) && (state =="RIV"))
					echo 'selected"selected'?>>Rivers</option>
									
								</select>
								</p>
			<input type="submit" name="register" value="Click to Register"/>
		</form>


</body>
</html>


