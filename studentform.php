<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
</head>
<body>
	<form action="studentform_processing.php" method="post">

	<h3>Student Registration Form</h3>
	<p>First Name: <input type="text" name="fname"/></p>
	<p>Last Name: <input type="text" name="lname"/>
	<p>Date of Birth: <input type="date" name="date"></p>
	<p>Gender: Male <input type="radio" name="sex" value="Male">
			   Female <input type="radio" name="sex" value="Female"></p>
	<p>Email: <input type="text" name="email"></p>
	<p>Mobile Number: <input type="text" name="number" maxlength="11"></p>

	<p>Address:</p>
	<textarea name="address"></textarea>
	<p>City: <input type="text" name="city"></p>
	<p>State: <input type="text" name="state"></p>
	<p>Country: <input type="text" name="country" value="Nigeria" readonly=""/></p>
	<p>Hobbies: Drawing: <input type="checkbox" name="dr" value="Drawing">
				Singing: <input type="checkbox" name="si" value="Singing">
				Dancing: <input type="checkbox" name="da" value="Dancing">
				Sketching: <input type="checkbox" name="sk" value="Sketching">
				Others: <input type="checkbox" name="ot" value="">
						<input type="text" name="hobby"/></p>
	<p>Qualification:</p>
	<table border="1">
		<tr>
			<th>S/No.</th><th>Examination</th><th>Board</th><th>Percentage</th><th>Year of Passing</th>
		</tr>
		<tr>
			<td>1</td><td>Class X</td><td><input type="text" name="b1"></td><td><input type="text" name="p1"></td><td><input type="text" name="y1"></td>
		</tr>
		<tr>
			<td>2</td><td>Class XII</td><td><input type="text" name="b2"></td><td><input type="text" name="p2"></td><td><input type="text" name="y2"></td>
		</tr>
		<tr>
			<td>3</td><td>Graduation</td><td><input type="text" name="b3"></td><td><input type="text" name="p3"></td><td><input type="text" name="y3"></td>
		</tr>
		<tr>
			<td>4</td><td>Masters</td><td><input type="text" name="b4"></td><td><input type="text" name="p4"></td><td><input type="text" name="y4"/></td>
		</tr>
	</table>
	<p>Courses Applied For: BCA <input type="radio" name="status" value="BCA">
							B.Com <input type="radio" name="status" value="B.com">
							B.Sc <input type="radio" name="status" value="B.sc">
							B.A <input type="radio" name="status" value="B.a"></p>
	<input type="submit" name="" value="Submit"><input type="reset" name="" value="Reset">
	</form>					
</body>
</html>