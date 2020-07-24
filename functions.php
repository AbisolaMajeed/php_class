<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>

		<?php 
				function greeting()
						{
							echo "Hello!!! Welcome to our PHP Class<br/>";
							echo "We are pleased to have you around</br>";
							echo "We look forward to having a wonderful time with you<br/>";
						}

				function add()
						{
							$a = 10;
							$b = 20;
							$c = 30;

							$sum = ($a + $b + $c);

							echo "The sum of $a, $b and $c is $sum<br/>";
						}

				//FUNCTIONS THAT TAKE ARGUMENT

				function sum($x, $y, $z)
				{
					$sum = ($x + $y +$z);
					echo "<p>The sum of $x, $y and $z is $sum</p>";

				}

				function product($x, $y, $z )
				{
					$product = ($x * $y * $z);
					echo "<p>The product of $x, $y and $z is $product</p>";
				}

				function say_hello($name)
				{
					echo "<p>Welcome, <strong>$name</strong>. Thanks for visiting</p>";
				}

		?>

		<h2>The Code Center</h2>

		<?php 
				greeting();
				add();
				greeting();
				add();

				echo "<hr/>";
				sum(15, 24, 10);
				sum(56, 37, 49);

				echo "<br/>";
				product(12, 2, 3);
				product(5, 0, 1);
				say_hello('James');

				$my_name = "Tunde Babalola";
				say_hello($my_name);

				function create_textbox($name)
					{
						echo ucfirst($name).": <input type=\"text\" name=\"$name\"/>";
					}

				function create_radio($name, $value)
				{
					echo $value." <input type=\"radio\" name=\"$name\" value=\"$value\"/>";
				}

				function create_textarea($name)
				{
					echo ucfirst($name). ":<br/><textarea></textarea>";
				}

				function create_selectbox($value, $opt)
				{
					echo "<select>
									<option value=\"$value\">$opt</option>
						</select>";
				}

		?>
		<hr/>

		<p> <?php create_textbox('firstname'); ?></p>
		<p> <?php create_textbox('lastname'); ?></p>
		<p> <?php create_textbox('email') ?></p>
		<p> Gender: <?php
						create_radio('sex', 'Male');
						create_radio('sex', 'Female');
					?>
					</p>
		<p>Marital Status: <?php
								create_radio('status','Single');
								create_radio('status','Married');
								create_radio('status','Divorced');
								create_radio('status','Separated');

							?>
						</p>

		<p> <?php create_textarea('address'); ?></p>
		<p> <?php create_textarea('comment'); ?></p>

		<p>State of Origin: <?php
								create_selectbox('','Select State');
								create_selectbox('ABJ','Abuja');
								create_selectbox('LAG','Lagos');
								create_selectbox('IMO','Imo');


							?>

		<!-- <p>Firstname: <input type="text" name="firstname"/></p> -->


		<!-- <p>Gender: Male <input type="radio" name="gender" value="Male"/>
				Female <input type="radio" name="gender" value="Female"/> -->


				<!-- <p>State of Origin: <select name="state">
											<option value="">Select State</option>
											<option value="ABJ">Abuja</option>
											<option value="LAG">Lagos</option>
											<option value="IMO">Imo</option>
					
				</select></p> -->


				<!-- <p>Address: <br/><textarea name="address"></textarea></p> -->







</body>
</html>