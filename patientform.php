<!DOCTYPE html>
<html>
<head>
	<title>Patient Registration Form</title>
</head>
<body>

	<?php


				if(isset($_POST['register']))
				{
					$error = array();

					if(empty($_POST['pname']))
					{
						$error['pname'] = "Enter your name";
					} else {
						$pname = $_POST['pname'];
					}

					if(empty($_POST['number']))
					{
						$error['number'] = "Enter your phone number";
					} else {
						$number = $_POST['number'];
					}

					if(empty($_POST['pnumber']))
					{
						$error['pnumber'] = "Select kind of alt. phone number";
					} else {
						$pnumber = $_POST['pnumber'];
					}

					if(empty($_POST['anumber']))
					{
						$error['anumber'] = "Enter alt. phone number";
					} else {
						$anumber = $_POST['anumber'];
					}

					if(empty($_POST['email']))
					{	
						$error['email'] = "Enter your email";
					} else {
						$email = $_POST['email'];
					}

					if(empty($_POST['address']))
					{
						$error['address'] = "Enter your address";
					} else {
						$address = $_POST['address'];
					}

					if(empty($_POST['city']))
					{
						$error['city'] = "Enter your city";
					}else {
						$city = $_POST['city'];
					}

					if(empty($_POST['']))
					{	
						$error['state'] = "Enter your state";
					} else {
						$state = $_['state'];
					}

					if(empty($_POST['date']))
					{
						$error['date'] = "Enter your date of birth";
					} else {
						$date = $_POST['date'];
					}

					if(empty($_POST['sex']))
					{	
						$error['sex'] = "Select your gender";
					} else  {
						$sex = $_POST['sex'];
					}

					if(empty($error))
					{
						echo "<p><b>Name:</b> $pname <b>Phone No:</b> $number </p>";
						echo "<p><b>Alt. No:</b> $pnumber: $anumber</p>";
				 		echo "<hr/>";
						echo "<p><b>Email:</b> $email</p>";
				 		echo "<p><b>Address:</b> $address</p>";
				 		echo "<p><b>City:</b> $city	<b>State:</b> $state<hr/>";
				 		echo "<p><b>Date of Birth:</b> $date  <b>Sex:</b> $sex</p>";

					}

				}
						
	?>		

	<form action="" method="post">

	<hr/>
	<h3>Patient's Registration Form</h3>
	<hr/>
	<p>Patient's Name(Last, First, MI): <input type="text" name="pname" value="<?php if(isset($pname)) echo $pname; ?>"
		/><?php if(isset($error['pname'])) echo $error['pname']?></p>
	<p>Patient's Home Phone Number: <input type="text" name="number" maxlength="11" value="<?php if(isset($number)) echo $number; ?>"
		><?php if(isset($error['number'])) echo $error['number']?></p> 
	<p>Alternate Phone Number: Cell: <input type="radio" name="pnumber" value="Cell"
	 <?php if(isset($pnumber) && ($pnumber == "Cell")) echo 'checked="checked"' ?>
		/><?php if(isset($error['pumber'])) echo $error['pnumber']?> 
							   Work: <input type="radio" name="pnumber" value="Work"/>
							   <?php if(isset($anumber) && ($anumber == "Work")) echo 'checked="checked"' ?>
							   <?php if(isset($error['pumber'])) echo $error['pnumber']?> 
							   		 <input type="text" name="anumber" maxlength="11" value="<?php if(isset($anumber)) echo $anumber; ?>" 
							   		 /><?php if(isset($error['anumber'])) echo $error['anumber']?></p>
	<hr/>
	<p>Email Address: <input type="text" name="email"
	/><?php if(isset($error['email'])) echo $error['email']?></p>
	<p>Address: <textarea name="address"></textarea></p>
	<p>City: <input type="text" name="city">
			<?php if(isset($error['city'])) echo $error['city']?> 
			State: <input type="text" name="state"
			/><?php if(isset($error['state'])) echo $error['state']?></p>
	<p>Date of Birth: <input type="date" name="date"> 
		Sex: M: <input type="radio" name="sex" value="M"
		<?php ?>/>
			 F: <input type="radio" name="sex" value="F"/></p>
	<hr/>
	<p>Marital Status: Married <input type="radio" name="mstatus" value="Married"/>
					   Single <input type="radio" name="mstatus" value="Single"/>
					   Divorced <input type="radio" name="mstatus" value="Divorced"/>
					   Widowed <input type="radio" name="mstatus" value="Widowed"/></p>
	<hr/>
	<p>Patient's Employer: <input type="text" name="employer"/></p>
	<p>Employment Status: Full Time <input type="radio" name="estatus" value="Full Time"/>
						  Part Time <input type="radio" name="estatus" value="Part Time"/>
						  Unemoloyed <input type="radio" name="estatus" value="Unemoloyed"/>
						  Retired <input type="radio" name="estatus" value="Retired"/>
						  Student <input type="radio" name="estatus" value="Student"/>
						  Other <input type="radio" name="estatus" value="Other"/><input type="text" name="estatus"></p>
	<hr/>
	<p>Emergency Contact: <input type="text" name="contact"> Relationship to Patient: <input type="text" name="relation"/></p>
	<p>Address: <textarea name="address1"></textarea> Phone Number: <input type="text" name="number1" maxlength="11"/></p>
	<hr/>
	<h3>INSURANCE INFORMATION</h3>
	<p>Primary Insurance: <input type="text" name="pry"/></p>
	<p>Patient is Subscriber/Policy holder: Y <input type="radio" name="subscriber" value="Yes">
											N <input type="radio" name="subscriber" value="No"></p>
	<p>Secondary Insurance: <input type="text" name="sec"/></p>
	<p>Patient is Subscriber/Policy holder: Y <input type="radio" name="holder" value="Yes">
											N <input type="radio" name="holder" value="No"></p>
	<h5>INSURED INFORMATION(IF OTHER THAN PATIENT)-We will request to scan your ID and insurance card</h5>
	<p>Subscriber/Policy Holder: <input type="text" name="policy">Relationship to Patient: <input type="text" name="relation1"/></p>
	<p>Address: <textarea name="address2"></textarea>
	<hr/>
	<p>Date of Birth: <input type="date" name="date1"></p>
	<p>His or Her Employer: <input type="text" name="employer1"> Work Phone Number: <input type="text" name="number2"/></p>
	<hr/>
	<h5>RELEASE OF INFORMATION</h5>
	<p>I hereby give permission to the person(s)listed below to receive information about the care of the above named patient.</p>
	<p>Name(s): <input type="text" name="name"> Relationship to Patient: <input type="text" name="relation2"></p>
	<hr/>
	<p>Anjola Medical Group reserves the right to charge a fee for any scheduled visits that are</p>
	<ul>
		<li>Cancelled with less than 24hours notice</li>
		<li>Are missed without calling to cancel(no show)</li></ul>
	<p>Cancellation Fee Schedule: New Patient 5000naira; Established Patient 3500naira</p>
	<p>Patient/Parent or Guardian Signature: <br/><textarea name="sign"></textarea></p>
	<p>Date: <input type="text" name="date2"></p>
	<input type="submit" name="register" value="Submit"/>

	</form>

</body>
</html>