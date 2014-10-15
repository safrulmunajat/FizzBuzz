<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FizzBuzz</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 30%;
			text-align: center;
		}
		table th {
			background: yellow;
		}
	</style>
</head>
<body>
	<table border="1">
		<th>Kelipatan 3</th>
		<th>Kelipatan 5</th>
		<th>Kelipatan 3 dan 5</th>
		<tr>
			<td>
				<?php
					$a = 0;
					while ($a < 100) {
						$a = $a + 1;
						if ($a % 3 == 0)
						{
							echo "Fizz"."<br>";
						}
						else
						{
							echo $a."<br>";
						}
					}
				?>
			</td>

			<td>
				<?php
					$b = 0;
					while ($b < 100) {
						$b = $b + 1;
						if ($b % 5 == 0) {
							echo "Buzz"."<br>";
						}
						else {
							echo $b."<br>";
						}
					}
				?>
			</td>

			<td>
				<?php 
					$c = 0;
					while ($c < 100) {
						$c = $c + 1;
						if ($c % 3 == 0 && $c % 5 == 0) {
							echo "FizzBuzz"."<br>";
						}
						else
						{
							echo $c."<br>";
						}
					}
				?>
			</td>
		</tr>
	</table>
</body>
</html>