<?php

	$mn = mysqli_connect("localhost", "root", "", "sample") or die (mysqli_error($mn));

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Customer</title>
</head>
<body>
	<p><big>eaZymoney Customer Registation Form</big></p>
	<hr/>
	<p><b>Instructions:</b> Please fill the form in BLOCK letters only. All fields with '*' are mandatory.</p>

	<a href="add_customer.php">Add Customer</a>
	<a href="view_customer.php">View Customer</a>

			<?php 

				if(array_key_exists('register', $_POST))
				{
					$error = array();

					if(empty($_POST['lastname']))
					{
						$error[] = "Enter your lastname";
					} else 
					{
						$lastname = mysqli_real_escape_string($mn, $_POST['lastname']);
					}
					if(empty($_POST['othername']))
					{
						$error[] = "Enter your Other names";
					} else
					{
						$othername = mysqli_real_escape_string($mn, $_POST['othername']);
					}
					if(empty($_POST['number']))
					{
						$error[] = "Enter your Mobile Number";
					} else
					{
						$number = mysqli_real_escape_string($mn, $_POST['number']);
					}
					if(empty($_POST['date']))
					{
						$error[] = "Enter your Date of Birth";
					} else
					{
						$date = mysqli_real_escape_string($mn, $_POST['date']);
					}
					if(empty($_POST['gender']))
					{
						$error[] = "Select your gender";
					} else
					{
						$gender = mysqli_real_escape_string($mn, $_POST['gender']);
					}
					if(empty($_POST['nation']))
					{
						$error[] = "Enter your Nationality";
					} else
					{
						$nation = mysqli_real_escape_string($mn, $_POST['nation']);
					}if(empty($_POST['passport']))
					{
						$error[] = "Enter your Passport No.";
					} else
					{
						$passport = mysqli_real_escape_string($mn, $_POST['passport']);
					}
					if(empty($_POST['email']))
					{
						$error[] = "Enter your Email";
					} else
					{
						$email = mysqli_real_escape_string($mn, $_POST['email']);
					}
					if(empty($_POST['address']))
					{
						$error[] = "Enter your Address";
					} else
					{
						$address = mysqli_real_escape_string($mn, $_POST['address']);
					}
					if(empty($_POST['city']))
					{
						$error[] = "Enter your City";
					} else
					{
						$city = mysqli_real_escape_string($mn, $_POST['city']);
					}
					if(empty($_POST['state']))
					{
						$error[] = "state";
					} else
					{
						$state = mysqli_real_escape_string($mn, $_POST['state']);
					}
					if(empty($_POST['kinlname']))
					{
						$error[] = "Enter your Next of Kin Lastname";
					} else
					{
						$kinlname = mysqli_real_escape_string($mn, $_POST['kinlname']);
					}
					if(empty($_POST['kinoname']))
					{
						$error[] = "Enter your Next of Kin Other names";
					} else
					{
						$kinoname = mysqli_real_escape_string($mn, $_POST['kinoname']);
					}
					if(empty($_POST['knumber']))
					{
						$error[] = "Enter your Next of Kin Mobile Number";
					} else
					{
						$knumber = mysqli_real_escape_string($mn, $_POST['knumber']);
					}
					if(empty($_POST['residence']))
					{
						$error[] = "Enter your Residence Proof Type";
					} else
					{
						$residence = mysqli_real_escape_string($mn, $_POST['residence']);
					}
					if(empty($_POST['idnumber']))
					{
						$error[] = "Enter your ID Proof No.";
					} else
					{
						$idnumber = mysqli_real_escape_string($mn, $_POST['idnumber']);
					}
					if(empty($_POST['idtype']))
					{
						$error[] = "Enter your ID Poof type";
					} else
					{
						$idtype = mysqli_real_escape_string($mn, $_POST['idtype']);
					}
					if(empty($_POST['accnumber']))
					{
						$error[] = "Enter your Account No.";
					} else
					{
						$accnumber = mysqli_real_escape_string($mn, $_POST['accnumber']);
					}

					if(empty($_POST['acctype']))
					{
						$error[] = "Enter your Account type";
					} else
					{
						$acctype = mysqli_real_escape_string($mn, $_POST['acctype']);
					}
					if(empty($_POST['csign']))
					{
						$error[] = "Enter Customer Name and Signature";
					} else
					{
						$csign = mysqli_real_escape_string($mn, $_POST['csign']);
					}
					if(empty($_POST['cdate']))
					{
						$error[] = "Enter Date";
					} else
					{
						$cdate = mysqli_real_escape_string($mn, $_POST['cdate']);
					}
					if(empty($_POST['rsign']))
					{
						$error[] = "Enter Registering Agent Name and Signature";
					} else
					{
						$rsign = mysqli_real_escape_string($mn, $_POST['rsign']);
					}

					if(empty($_POST['rdate']))
					{
						$error[] = "Enter Date";
					} else
					{
						$rdate = mysqli_real_escape_string($mn, $_POST['rdate']);
					}


								if(empty($error))
								{$insert = mysqli_query($mn, "INSERT INTO customer
															VALUES(NULL,
																	'".$lastname."',
																	'".$othername."',
																	'".$number."',
																	'".$date."',
																	'".$gender."',
																	'".$nation."',
																	'".$passport."',
																	'".$email."',
																	'".$address."',
																	'".$city."',
																	'".$state."',
																	'".$accnumber."',
																	'".$acctype."',
																	'".$kinlname."',
																	'".$kinoname."',
																	'".$knumber."',
																	'".$idnumber."',
																	'".$idtype."',
																	'".$rsign."'
														)") or die(mysqli_error($mn));
								echo "<h5>Customer successfully added</h5>";
						} else
						{
							foreach ($error as $error) {
								echo "<p>*$error<p>";
							}
						}


				}






			?>

	<form action="" method="post">
	<p>*Customer Name: <input type="text" name="lastname">
					   <small>(Last Name)</small> <input type="text" name="othername"><small>(Other Names)</small></p>
	<p>*Mobile Number: <input type="text" name="number" maxlength="11"></p>
	<p>Date of Birth: <input type="date" name="date"> Male <input type="radio" name="gender" value="Male">
												  Female <input type="radio" name="gender" value="Female"><sub>(please click as appropriate)</sub>
 	<p>Nationality: <input type="text" name="nation"> Passport No. if non Nigerian: <input type="text" name="passport"></p>
 	<p>E-mail: <input type="text" name="email"></p>
 	<p>Address: <textarea name="address"></textarea> City:<input type="text" name="city"> State: <input type="text" name="state"></p>
 	<p>*Next of Kin *Name: <input type="text" name="kinlname"><small>(Last Name)</small> <input type="text" name="kinoname"><small>(Other Names)</small></p>
 	<p>*Mobile Number: <input type="text" name="knumber" maxlength="11"></p>
 	<hr/>
 	<p align="center"><b>For Silver Customer (Semi-Banked)</b>
 	<p align="center"> Mandatory requirements: Proof of Address and Identity with copies</p>
 	<p>*Residence Proof Type: <input type="text" name="residence"><sub>(Acceptable Residence proof documents:Utility bills, lease agreements, passport, Others.)</sub></p>
 	<p>*ID Proof No <input type="text" name="idnumber"><sub>(Acceptable ID proof documents:...</sub></p>
 	<p>*ID Proof Type: Driver's License <input type="radio" name="idtype" value="Driver's License">
 					   Int'l Passport <input type="radio" name="idtype" value="Int'l Passport">
 					   Student ID card <input type="radio" name="idtype" value="Student ID card">
 					   Others <input type="radio" name="idtype" ><sub>(please click as appropriate)</sub></p>
 					   <hr/>
    <p align="center"><b>For Gold Customer (Banked)</b>
 	<p align="center"> Mandatory requirements: Bank Account With Zenith Bank</p>
 	<p>*Account No: <input type="text" name="accnumber"></p>
 	<p>*Account Type: <input type="text" name="acctype"></p>
 	<hr/>
 	<p><b>Customer Declaration:</b> I declare that personal details mentioned above are true ro the best of my knowledge and that I have read and understand the terms and conditions that apply as detailed behind the page</p>
 	<p><input type="text" name="csign"></p>
 	<p>Customer Name and Signature</p>
 	<p><input type="text" name="cdate"></p>
 	<p>Date</p>
 	<hr/>
 	<p><b>For Official Use Only</b></p>
 	<p><input type="text" name="rsign"></p>
 	<p>Registering Agent Name and Signature</p>
 	<p><input type="text" name="rdate"></p>
 	<p>Date</p>

 		<p><input type="submit" name="register" value="Register"></p>

</form>


</body>
</html