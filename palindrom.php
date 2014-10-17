<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Palindrom Test</title>
</head>
<body>
	<div>
		<form method="post" action="">
			<p>Masukkan Kata/Frase : <input type="text" name="fibonacci" ></p>
			<input type="submit" name="submit" value="Submit">
		</form>
<?php
	if(!empty($_POST['fibonacci']))
	{
		$kataFibonacci = $_POST['fibonacci'];
		if ($kataFibonacci == strrev($kataFibonacci)) 
		{
			echo "$kataFibonacci merupakan Palindrom . . .";
		}
		elseif ($kataFibonacci !== strrev($kataFibonacci))
		{
			echo "$kataFibonacci bukan merupakan Palindrom . . .";
		}
		echo "<br>";
		echo "fibonacci dari kata tersebut adalah ".strrev($kataFibonacci);
	}
?>

	</div>
	
</body>
</html>