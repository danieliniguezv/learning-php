<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Array</title>
</head>
<body>
	<?php 
		// Arrays can handle combined data types:
		$combined = array("Padalustro", 1, true); 
		$friends = array("Matt", "Luis", "José", "Raúl"); 
		echo "The friends array has " . count($friends) . " elements."; // Let's us know how many elements does $friends have.
		echo "<br>";
		echo $friends[0];
	?>
</body>
</html>
