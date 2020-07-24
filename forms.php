<!DOCTYPE html>
<html>
<head>
	<title>Form Processing</title>
</head>
<body>


		<h1>User Registration Form</h1>
		<p>Please fill the form fields below</p>


		<form action="form_processing.php" method="post">

			<p>Firstname: <input type="text" name="fname"/></p>
			<p>Lastname: <input type="text" name="lname"/></p>
			<p>Gender: Male <input type="radio" name="sex" value="Male"/>
					   Female <input type="radio" name="sex" value="Female"/>
						</p>
			<p>Address: <br/><textarea name="address" rows="5" cols="20"></textarea></p>
			<p>State of Origin: <select name="state">
									<option value="">Select State</option>
									<option value="OGN">Ogun</option>
									<option value="KNO">Kano</option>
									<option value="LAG">Lagos</option>
									<option value=KDA>Kaduna</option>
									<option value=RIV>Rivers</option>
									
								</select>
			<input type="submit" name="register" value="Click to Register"/>
		</form>

</body>
</html>