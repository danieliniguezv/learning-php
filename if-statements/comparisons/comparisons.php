<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comparisons</title>
</head>
<body>
	<?php
		function getMax($num1, $num2, $num3){
			if($num1 > $num2 && $num1 > $num3){
				return $num1;
			} elseif ($num1 == $num2 && $num1 > $num3){
				return $num1;
			} elseif ($num1 == $num3 && $num1 > $num2){
				return $num1;
			} elseif ($num2 > $num1 && $num2 > $num3){
				return $num2;
			} elseif ($num2 == $num1 && $num2 > $num3){
				return $num2;
			} elseif ($num2 == $num3 && $num2 > $num1){
				return $num2;
			} elseif ($num1 == $num2 && $num2 == $num3){
				return $num1;
			} else {
				return $num3;
			}
		}

		$maxNumber = getMax(180001, 1800, 1802);
		echo $maxNumber;
	?>
</body>
</html>
