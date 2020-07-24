<?php
		
		//ARRYS

	$age = array(56, 24, 33, 60, 72, 55, 20, 18, 31, 40);
	$month = array(1 => "Jan", "Feb", "March", 10=>"Apr", "May", "June", "July", "Aug", "Sep");

	//TO TROUBLESHOOT AN ARRAY i.e. SEE WHAT IS INSIDE THE ARRAY, WE USE THE var_dump or print_r FUNCTIONS

	print_r($age);
	echo "<hr/>";
	print_r($month);
	echo "<hr/>";
	echo var_dump($age);
	echo '<hr/>';
	echo var_dump($month);


	echo "<hr/>";

	echo "Element in Position 3: ".$age[3]."<br/>";
	echo "Element in position 6 i.e index/key 6: ".$age[6]."<br/>";
	echo "Element in position 0: ".$age[0].'<br/>';


	//OTHER METHODS OF DECLARING AN ARRAY

		$error = array();  //ARRAY HAS BEEN INITIALIZED

		//BELOW WE BEGIN TO POPULATE THE ERROR ARRAY

		$error[] = "Enter your Firstname";
		$error[] = "Enter your Lastname";
		$error[] = "Select your gender";
		$error[] = "Select your state of origin";
		$error[] = "Choose your Marital Status";
		$error[] = "Enter your Address";


		//ANOTHER METHOD OF DECLARING AN ARRAY

		$course['Java Programming'] = 500000;
		$course['Web Development'] = 800000;
		$course['Frontend Development'] = 750000;
		$course['UI/UX'] = 650000;
		$course['DataScience'] = 400000;
		$course['Mobile Development'] = 550000;

		echo var_dump($error);
		echo "<hr/>";
		echo var_dump($course);

		echo '<hr/>';
		echo $course['Java Programming'] ." ". "<br/>";

		//LOOPING THROUGH THE ERROR ARRAY - WE NEED ONLY THE VALUE

		foreach($error as $err)
			{
				echo $err.'<br/>';
			}

			echo '<br/>';

		foreach($month as $mon)
			{
				echo $mon.'<br/>';
			}

			echo '<br/>';

			echo "<select><option>Select Month</option>";

			foreach($month as $key => $value)
					{
						echo "<option value=\"$key\">$value</option>";
					}
			echo "</select>";

			echo "<hr/>";

			echo "<h3>The Code Center programs and their prices</h3>";

			foreach($course as $program => $price)

					{
						echo $program.' - <strong>N' .$price."</strong><br/>";
					}

		
			echo "<table border=\"1\"><tr><th>Program</th><th>Price</th></tr><tr>";

			foreach($course as $k => $v)
				{
					echo "<td>$k</td><td>$v</td></tr>";
				}

				echo "</table>";

			$day = range(1, 31);
			$year = range(2001, 2020);

			echo "<select><option>Select Day</option>";

			foreach ($day as $dy){
				echo "<option>$dy</option>";
			}
			echo "</select>";

			echo "<select><option>Select Year</option>";

			foreach ($year as $yr){
				echo "<option>$yr</option>";
			}

			echo "</select>"


			




?>