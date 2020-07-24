<?php 
		
		$db = mysqli_connect("localhost", "root", "", "sample") or die (mysqli_error($db))




?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>

		<a href="add_student.php">Add Student</a>
		<a href="view_student.php">View Student</a>
		<hr/>


	<h3>Student Registration Form</h3>

			<?php 
				if(array_key_exists('submit', $_POST))
				{

					$error = array();

					if(empty($_POST['fname']))
					{
						$error[] = "Enter your firstname";
					} else{
						$fname = mysqli_real_escape_string($db, $_POST['fname']);
					}
					if(empty($_POST['lname']))
					{
						$error[] = "Enter your lastname";
					} else{
						$lname = mysqli_real_escape_string($db, $_POST['lname']);
					}
					if(empty($_POST['date']))
					{
						$error[] = "Enter your date of birth";
					} else {
						$date = mysqli_real_escape_string($db, $_POST['date']);
					}
					if(empty($_POST['gender']))
					{
						$error[] = "Select your gender";
					} else {
						$gender = mysqli_real_escape_string($db, $_POST['gender']);
					}
					if(empty($_POST['email']))
					{
						$error[] = "Enter your email";
					} else {
						$email =  mysqli_real_escape_string($db, $_POST['email']);
					}
					if(empty($_POST['number']))
					{
						$error[] = "Enter your mobile number";
					} else
					{
						$number = mysqli_real_escape_string($db, $_POST['number']);
					}
					if(empty($_POST['address']))
					{
						$error[] = "Enter your address";
					} else
					{
						$address = mysqli_real_escape_string($db, $_POST['address']);
					}
					if(empty($_POST['city']))
					{
						$error[] = "Enter your city";
					} else
					{
						$city = mysqli_real_escape_string($db, $_POST['city']);
					}
					if(empty($_POST['state']))
					{
						$error[] = "Enter your state";
					} else
					{
						$state = mysqli_real_escape_string($db, $_POST['state']);
					}
					if(empty($_POST['country']))
					{
						$error[] = "Enter your country";
					} else
					{
						$country = mysqli_real_escape_string($db, $_POST['country']);
					}
					if(empty($_POST['hobbies']))
					{
						$error[] = "Enter your hobbies";
					} else
					{
						$hobbies = mysqli_real_escape_string($db, $_POST['hobbies']); 
					}
					if(empty($_POST['board']))
					{
						$error[] = "Enter Board value";
					} else
					{
						$board = mysqli_real_escape_string($db, $_POST['board']);
					}
					if(empty($_POST['percent']))
					{
						$error[] = "Enter Percent value";
					} else
					{
						$percent = mysqli_real_escape_string($db, $_POST['percent']);
					}
					if(empty($_POST['year']))
					{
						$error[] = "Enter Year of Passing";
					} else
					{
						$year = mysqli_real_escape_string($db, $_POST['year']);
					}
					if(empty($_POST['courses']))
					{
						$error[] = "Enter your Qualification";
					} else
					{
						$courses = mysqli_real_escape_string($db, $_POST['courses']);
					}
					if(empty($error))
					{
						$insert = mysqli_query($db, "INSERT INTO student
													VALUES(NULL,
															'".$fname."',
															'".$lname."',
															'".$date."',
															'".$gender."',
															'".$email."',
															'".$number."',
															'".$address."',
															'".$city."',
															'".$state."',
															'".$country."',
															'".$hobbies."',
															'".$courses."'
												)") or die (mysqli_error($db));
						echo "<h5>Student added successfully</h5>";
					} else
					{
						foreach ($error as $error)
						{
							echo "<p>*$error</p>";
						}
					}
				}


			?>

	<form action="" method="post">

	<p>First Name: <input type="text" name="fname"/></p>
	<p>Last Name: <input type="text" name="lname"/>
	<p>Date of Birth: <input type="date" name="date"/></p>
	<p>Gender: Male <input type="radio" name="gender" value="Male">
			   Female <input type="radio" name="gender" value="Female"/></p>
	<p>Email: <input type="text" name="email"/></p>
	<p>Mobile Number: <input type="text" name="number" maxlength="11"></p>

	<p>Address:</p><textarea name="address"></textarea>
	<p>City: <input type="text" name="city"></p>
	<p>State: <input type="text" name="state"></p>
	<p>Country: <input type="text" name="country" value="Nigeria" readonly=""></p>
	<p>Hobbies: Drawing: <input type="checkbox" name="hobbies">
				Singing: <input type="checkbox" name="hobbies">
				Dancing: <input type="checkbox" name="hobbies">
				Sketching: <input type="checkbox" name="hobbies">
				Others: <input type="checkbox" name="hobbies"><input type="text" name="hobbies"></p>
	<p>Qualification:</p>
	<table border="1">
		<tr>
			<th>S/No.</th><th>Examination</th><th>Board</th><th>Percentage</th><th>Year of Passing</th>
		</tr>
		<tr>
			<td>1</td><td>Class X</td><td><input type="text" name="board"></td><td><input type="text" name="percent"></td><td><input type="text" name="year"></td>
		</tr>
		<tr>
			<td>2</td><td>Class XII</td><td><input type="text" name="board"></td><td><input type="text" name="percent"></td><td><input type="text" name="year"></td>
		</tr>
		<tr>
			<td>3</td><td>Graduation</td><td><input type="text" name="board"></td><td><input type="text" name="percent"></td><td><input type="text" name="year"></td>
		</tr>
		<tr>
			<td>4</td><td>Masters</td><td><input type="text" name="board"></td><td><input type="text" name="percent"></td><td><input type="text" name="year"></td>
		</tr>
	</table>
	<p>Courses Applied For: BCA <input type="radio" name="courses" value="BCA">
							B.Com <input type="radio" name="courses" value="B.Com">
							B.Sc <input type="radio" name="courses" value="B.Sc">
							B.A <input type="radio" name="courses" value="B.A"></p>
	<input type="submit" name="submit" value="Submit"><input type="reset" name="" value="Reset">	

	</form>				
</body>
</html>