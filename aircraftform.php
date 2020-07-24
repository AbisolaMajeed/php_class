<!DOCTYPE html>
<html>
<head>
	<title>Aircraft Registration Form</title>
</head>
<body>
	<form action="aircraftform_processing.php" method="post">
<h3 align="center">
	<p>Aircraft Registration Form</p>
	<p>Event & Date: WACO Millitary Experience</p>
	<p>July 8, 9, 10, 2011</p>
</h3>
<p>Airport Designation: IWF
<p>Type of Aircraft: <input type="text" name="type"> "N"Number: <input type="text" name="number"/></p>
<p>Date and Time you plan to display your aircraft: <input type="text" name="time"></p>
<p>Do you need an additional space for organization display?: Yes <input type="radio" name="space" value="Yes">
															  No <input type="radio" name="space" value="No">
<p>Size of your display or activity in relation 10<sup>3</sup>x10<sup>4</sup> spaces: <input type="text" name="size"></p>
<p>Special Instructions and needs: <br/> <textarea name="instructions"></textarea></p>
<p>Name of Pilot and Passengers: <br/> <textarea name="pname"></textarea></p>
<p>Owner/Organization name: <input type="text" name="oname"></p>
<p>Your Position with Organization: <input type="text" name="position"></p>
<p>Address: <br/><textarea name="address"></textarea></p>
<p>City: <select name="city">						
			<option value="Igando">Igando</option>  
			<option value="Agege">Agege</option>
			<option value="Surulere">Surulere</option>
			<option value="Oshodi">Oshodi</option>
			<option value="Lekki">Lekki</option>
</select>							State:<select name="state">
											<option value="Lagos">Lagos</option>
											<option value=Rivers>Rivers</option>
											<option value=Kogi>Kogi</option>
											<option value=Benue>Benue</option>
											<option value="Imo">Imo</option>
</select>

<p>Phone(s): <input type="text" name="phone"> Fax: <input type="text" name="fax"></p>
<p>Email: <input type="text" name="email"></p>
<p>Name & Address of your Insurance Company:<br/><textarea name="icname"></textarea></p>
<p>Signature: <input type="text" name="sign"> Date: <input type="text" name="date"></p>
<input type="submit" name="" value="Register">

</form>
</body>
</html>