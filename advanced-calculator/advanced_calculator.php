<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Advanced Calculator</title>
</head>
<body>
	<form action="advanced_calculator.php" method="post">
		<!-- step attribute allows to have decimals in the input in this particular
		case it's for 1 decimal so if 2 or 3 were needed we would update step to
		0.01 or 0.001 respectively or to the desired decimals for that matter. -->
		Number 1: <input type="number" step="0.1" name="num1"><br>
		OP: <input type="text" name="op"><br>
		Number 2: <input type="number" step="0.1" name="num2"><br>
		<input type="submit">
	</form>
	<br>
	<?php 
		$num1 = $_POST["num1"] ?? 0;
		$num2 = $_POST["num2"] ?? 0;
		$op = $_POST["op"] ?? "";

		if($op == "+"){
			echo $num1 + $num2;
		} elseif($op == "-"){
			echo $num1 - $num2;
		} elseif($op == "*"){
			echo $num1 * $num2;
		} elseif($op == "/"){
			echo $num1 / $num2;
		} else {
			echo "Invalid operator!";
		}
	?>
</body>
</html>
