<?php
			

			//FOR LOOP
	
		for($x=1; $x<=20; $x++)
				{
					if($x == 20){
						echo $x.".";
					} else {
					echo $x.', ';
					}
				}

				echo "<hr/>";

				//WHILE LOOP

				$k=10;

				while($k <= 30)
				{
					if($k == 15){
						echo "Fifteen <br/>";
					} elseif($k == 20){

						echo "k is 20 <br/>";
					} else{
						echo $k."<br/>";
					}

					$k++;
					
				}

				echo "<hr/>";

				echo "<h3>Multiples of 5 between 1 and 100</h3>";
				for($m=1; $m<=50; $m++)
				{
					if(($m%5) == 0)
					{
						echo $m."<br/>";
					}
				}

				echo "<hr/>";

				echo "<h3>Factors of 30</h3>";
				for($a=1; $a<=30; $a++)
				{
					if((30%$a) == 0)
					{
						echo $a."<br/>";
					}
				}


				for($b=1; $b<=50; $b++)
				{
					if((($b%3) == 0) && ($b%5) ==0)
					{
						echo "FizzBuzz <br/>";
					} elseif(($b%5) == 0){
						echo "Buzz <br/>";
					} elseif(($b%3) ==0)
					{
						echo "Fizz <br/>";
					}
					else{
						echo $b."<br/>";
					}
				}

















?>