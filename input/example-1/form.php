<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input Form</title>
</head>
<body>
	<form action="form.php" method="get">
		Name: <input type="text" name="name">
		<input type="submit">
	</form>
	<br>
	<?php echo $_GET["name"] ?? "" ?>
</body>
</html>
