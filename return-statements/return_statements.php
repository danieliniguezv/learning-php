<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Return Statements</title>
</head>
<body>
	<?php 
		function cube($num) {
			return $num**3;	
		}

		$cubeResult = cube(3);
		echo $cubeResult;
	?>
</body>
</html>
