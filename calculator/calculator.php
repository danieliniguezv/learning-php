<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator</title>
</head>
<body>
	<form action="calculator.php" method="get">
		Number 1: <input type="number" name="num1">
		<br>
		Number 2: <input type="number" name="num2">
		<input type="submit">
	</form>
	<br>
	<?php 
		$num1 = $_GET["num1"] ?? 0;
		$num2 = $_GET["num2"] ?? 0;
		echo "Answer: " . ($num1 + $num2);
	?>
</body>
</html>
