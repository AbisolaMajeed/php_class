<?php
		
		//STRING FUNCTIONS


		echo "my name is James Babalola. I'm a product of Babcock University";

		echo strtoupper("my name is James Babalola. I'm a product of Babcock University")."<br/>";
		echo strtolower("my name is James Babalola. I'm a product of Babcock University")."<br/>";
		echo ucwords("my name is James Babalola. I'm a product of Babcock University")."<br/>";
		echo ucfirst("my name is James Babalola. I'm a product of Babcock University")."<br/>";
		echo strlen("my name is James Babalola. I'm a product of Babcock University")."<br/>";
		echo str_replace("James","Tofunmi", "I am James Babalola from Babcock University")."<br/>";

		echo "<hr/>";

		//NUMBER FUNCTIONS

		$x = 10567.877;
		echo "X: ".$x."<br/>";
		echo "X to the nearest whole number: ".round($x). "<br/>";
		echo "X in 2dp: ".round($x, 2), "<br/>";
		echo "X (Number Format): ".number_format($x). '<br/>';
		echo "X (Number Format in 2dp): ".number_format($x, 2). '<br/>';
		echo "X (Ceil): ".ceil($x)."<br/>";
		echo "X (Floor): ".floor($x)."<hr/>";

		//ARRAY FUNCTIONS

		$a = 34;

		$age = array(3, 65, 28, 10, 54, 45, 96, 50);

		echo "Is variable age an array?: ".is_array($age).'<br/>';
		echo "Is variable a an array?: ".is_array($a).'<br/>';
		echo "Is 100 an element in array age?: ".in_array(100, $age).'<br/>';
		echo "Is 65 an element in array age?: ".in_array(65, $age).'<br/>';
		echo "Does key 5 exist in array age?: ".array_key_exists(5, $age).'<br/>';
		echo "Maximum value in array Age: ".max($age)."<br/>";
		echo "Minimum value in array age: ".min($age)."<br/>";
		echo "Number of elements in array age: ".count($age)."<hr/>";


		//CONTROL STRUCTURES - IF STATEMENTS

		$m = 24;
		$n = 32;

		if($m > $n)
		{
			echo "M is greater than N";
		} else {
			echo "M is not greater than N";
		}



?>