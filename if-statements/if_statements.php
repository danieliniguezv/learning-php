<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>If Statements</title>
</head>
<body>
	<?php 
		// AND Operator.
		$isBlue = true;
		$isYellow = true;
		if ($isBlue && $isYellow){
			echo "This is both blue and yellow. <br>";
		} elseif ($isBlue && !$isYellow){
			echo "This is blue. <br>";	
		} elseif (!$isBlue && $isYellow){
			echo "This is yellow. <br>";
		} else {
			echo "This is neither blue or yellow. <br>";
		}
		// OR Operator.
		$isBlue = false;
		$isYellow = false;
		if ($isBlue || $isYellow){
			echo "This is blue or yellow or both. <br>";
		} else {
			echo "This is neither blue or yellow. <br>";
		}
	?>
</body>
</html>
