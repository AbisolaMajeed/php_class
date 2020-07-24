<?php
	
		$mn = mysqli_connect("localhost", "root", "", "sample") or die (mysqli_error($mn));

?>

<!DOCTYPE html>
<html>
<head>
	<title>Aircraft Registration Form</title>
</head>
<body>
<h3 align="center">
	<p>Aircraft Registration Form</p>
	<p>Event & Date: WACO Millitary Experience</p>
	<p>July 8, 9, 10, 2011</p>
</h3>

		<a href="add_aircraft.php"></a>

		<form action="" method="post">
<p>Airort Designation: IWF
<p>Type of Aircraft: <input type="text" name=""> "N"Number: <input type="text" name=""/></p>
<p>Date and Time you plan to display your aircraft: <input type="text" name=""></p>
<p>Do you need an additional space for organization display?: Yes <input type="radio" name="">
															  No <input type="radio" name="">
<p>Size of your display or activity in relation 10<sup>3</sup>x10<sup>4</sup> spaces: <input type="text" name=""></p>
<p>Special Instructions and needs: <br/> <textarea></textarea></p>
<p>Name of Pilot and Passengers: <br/> <textarea></textarea></p>
<p>Owner/Organization name: <input type="text" name=""></p>
<p>Your Position with Organization: <input type="text" name="">
<p>Address: <textarea></textarea></p>
<p>City: <select>						
			<option>Igando</option>
			<option>Agege</option>
			<option>Surulere</option>
			<option>Oshodi</option>
			<option>Lekki</option>
</select>							State:<select>
											<option>Lagos</option>
											<option>Rivers</option>
											<option>Kogi</option>
											<option>Benue</option>
											<option>Imo</option>
</select>

<p>Phone(s): <input type="text" name=""> Fax: <input type="text" name=""></p>
<p>Email: <input type="text" name=""></p>
<p>Name & Address of your Insurance Company:<textarea></textarea></p>
<p>Signature: <input type="text" name=""> Date: <input type="text" name=""></p>
<p><big>Please return this form:</big></p>
<p>WACO <small>Historical Society</small>
<p><small>1865 S. County Road 25A</small>
<p><small>Troy, Ohio, 45373</small></p>
<li><a href="abisolamajeed@gmail.com">abisolamajeed@gmail.com</a></li>
<p>or</p>
<li><a href="exceedira@wacomuseum.org"> exceedira@wacomuseum.org</a></li>
<p>Phone: (937)335-9226 / FAX: 937335-4357


</form>

</body>
</html>