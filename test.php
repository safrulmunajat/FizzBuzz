<?php
	for ($i=1; $i <= 100; $i++) { 
		if (strpos($i,'3', 0)!== false) {
			echo "Fizz"."<br>";
		}
		elseif (strpos($i,'5', 0)!== false) {
			echo "Buzz"."<br>";
		}
		else
		{
			echo $i."<br>";
		}
	}
?>
