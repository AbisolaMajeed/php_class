<?php 

		echo "Welcome to our PHP class. ";
		echo 'PHP stands for Hypertext Pre Processor';
		echo ". PHP is a server-side scripting language";

		echo '<br/>';
		echo " Shade said \"Good morning\"";
		echo '<br/>';
		echo 'Biola said "How are you?"';
		echo '<br/>';
		echo " She's a good girl";
		echo "<br/>";
		echo 'It\'s a new day';

		echo "<hr/>";
		echo "<h3>About Me</h3>";
		echo "<p>Abisola is a girl</p>";
		echo "<p>She hails from Kwara State</p>";
		echo "<p>Abisola is the first child</p>";


		echo "<h3>Top 5 Favourite Meal</h3>";
		echo "<ol><li>Rice and Stew</li><li>Yam and Egg</li><li>Amala and Vegetble soup</li><li>Bread and Beans</li><li>Indomie</li></ol>";

		echo "<hr/>";

		//PHP variables
		//String variables

		$firstname = "Abisola";
		$lname = "Majeed";
		$college = 'University of Ilorin';

		echo $firstname;
		echo "<br/>";
		echo $lname;
		echo "<br/>";
		echo $college;

		//String and variable concatenation
		echo '<hr/>';
		echo $firstname . $lname."<br/>";
		echo $firstname. ' '.$lname."<br/>";
		echo "My name is <b>" .$firstname. " " .$lname."</b><br/>";
		echo "My name is <b>" .$firstname. " " .$lname.".</b> I am a product of <em>" .$college."</em><br/>";

		$title = "The lion and The Jewel";
		$author = "Wole Soyinka";

		echo "The book " .$title. " was written by " .$author. "<br/>";

		echo "The book $title was written by $author <br/>";

		echo 'The book $title was written by $author <br/>';

		//Number variables
		$x = 24;
		$y = 10;
		$z = 32;
		$sum = $x+$y+$z;
		$product = $x*$y*$z;

		echo "The sum of $x, $y, $z is $sum<br/>";
		echo "The product of $x, $y, $z is $product<br/>";



?>