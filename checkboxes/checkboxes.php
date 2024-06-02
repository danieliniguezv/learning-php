<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkboxes</title>
</head>
<body>
	<form action="checkboxes.php" method="post">
		Apple: <input type="checkbox" name="fruits[]" value="apple"><br>
		Kiwi: <input type="checkbox" name="fruits[]" value="kiwi"><br>
		Grape: <input type="checkbox" name="fruits[]" value="grape"><br>
		Pineapple: <input type="checkbox" name="fruits[]" value="pineapple"><br>
		<input type="submit">
	</form>
	<?php 
		if(isset($_POST["fruits"])) {
			$fruits = $_POST["fruits"];
			echo $fruits[0];
		}
	?>
</body>
</html>
