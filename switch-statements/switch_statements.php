<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Switch Statements</title>
</head>
<body>
	<form action="switch_statements.php" method="post">
		What was your grade?
		<input type"number" name="grade">
		<input type="submit">
	</form>

	<?php 
		$grade = $_POST["grade"] ?? 0;
		switch($grade){
		case 10:
			echo "Sacaste " . $grade .  " excelente trabajo. ¡Felicidades!";
			break;
		case 9:
			echo "Sacaste " . $grade . " muy buen trabajo. ¡Felicidades!";
			break;
		case 8:
			echo "Sacaste " . $grade . " buen trabajo. ¡Felicidades!";
			break;
		case 7:
			echo "Sacaste " . $grade . " bien hecho.";
			break;
		case 6:
			echo "Sacaste " . $grade . ". Calificación aprobatoria mínima.";
			break;
		case 5:
			echo "Sacaste " . $grade . ". Tu calificaión no es aprobatoria.";
			break;
		default:
			echo "Calificación inválida.";
		}
	?>
</body>
</html>
