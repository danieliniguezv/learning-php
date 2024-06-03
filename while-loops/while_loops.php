<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>While Loops</title>
</head>
<body>
	<?php 
		$index = 1;
		// While Loop
		while($index <= 5){
			echo "$index <br>";
			$index++;
		}
		// Do While Loop
		$index = 6;
		do{
			echo "$index <br>";
			$index++;
		}while($index <= 5);
	?>
</body>
</html>
