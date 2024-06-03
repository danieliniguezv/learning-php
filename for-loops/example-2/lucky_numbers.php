<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lucky Numbers</title>
</head>
<body>
	<?php 
		$luckyNumbers = array(10, 1, 0, 5, 4, 6);
		for($i = 0; $i <= count($luckyNumbers) - 1; $i++){
			echo "Lucky Number: $luckyNumbers[$i]. <br>";
		}
	?>
</body>
</html>
