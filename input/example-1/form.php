<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input Form</title>
</head>
<body>
	<form action="form.php" method="get">
		Name: <input type="text" name="name">
		<br>
		Age: <input type="text" name="age">
		<input type="submit">
	</form>
	<br>
	Your name is <?php echo $_GET["name"] ?? ""; ?>
	<br>
	Your age is <?php echo $_GET["age"] ?? ""; ?>
</body>
</html>
