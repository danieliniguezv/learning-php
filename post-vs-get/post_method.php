<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>POST Method</title>
</head>
<body>
	<!-- The POST Method allows for passing information between the client and 
	the server in a secure fashion. The information passed in this way will not
	show on the URL parameters as opposed to GET Method -->
	<form action="post_method.php" method="post">
		Password: <input type="password" name="password">
		<br>
		<input type="submit">
	</form>
	<br>
	<?php 
		echo $_POST["password"] ?? "";
	?>
</body>
</html>
