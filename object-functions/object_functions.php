<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Object Functions</title>
</head>
<body>
	<?php 
		class Student {
			var $name;
			var $major;
			var $grade;	

			function __construct($name, $major, $grade){
				$this->name = $name;
				$this->major = $major;
				$this->grade = $grade;
			}

			function hasHonors(){
				if($this->grade >= 8.5){
					return "true";
				}	else {
					return "false";
				}
			}
		}

		$student1 = new Student("Eduardo España", "Carnicero", 9.5);
		$student2 = new Student("Octavio Paz", "Granjero", 5.7);

		echo $student1->name . " has honors: " . $student1->hasHonors() . "<br>";
		echo $student2->name . " has honors: " . $student2->hasHonors() . "<br>";
	?>
</body>
</html>
