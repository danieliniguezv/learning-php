<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>URL Parameters</title>
</head>
<body>
	<form action="url_parameters.php" method="get">
		Name: <input type="text" name="name">
		<br>
		<input type="submit">
	</form>
	<br>
	<?php 
		echo $_GET["name"] ?? "";
		echo "<br>";
		echo $_GET["age"] ?? ""; // This parameter is being introduced directly
														 // on the URL bar.
	?>
</body>
</html>
