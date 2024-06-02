<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Get Grade</title>
</head>
<body>
	<form action="get_grade.php" method="post">
		<input type="text" name="student">
		<input type="submit">
	</form>
	<?php 
		$student = $_POST["student"] ?? "";
		$grades = array("Daniel" => 10, "Roberto" => 9, "Rocky" => 10);
		if(isset($grades[$student])) {
			echo "$student's grade is " . $grades[$student] . ".";
		} else {
			echo "Student does not exist.";
		}
	?>
</body>
</html>
