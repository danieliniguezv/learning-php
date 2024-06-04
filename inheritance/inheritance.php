<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inheritance</title>
</head>
<body>
	<?php 
		class Chef {
			function makeChicken(){
				echo "The chef makes chicken. <br>";
			}

			function makeSalad(){
				echo "The chef makes salad. <br>";
			}

			function makeSpecialDish(){
				echo "The chef makes salmon. <br>";
			}
		}

		class ItalianChef extends Chef {
			function makePizza(){
				echo "The chef makes pizza. <br>";
			}	

			function makeSpecialDish(){
				echo "The chef makes lasagna. <br>";
			}
		}

		$chef = new Chef();
		echo $chef->makeChicken();
		echo $chef->makeSpecialDish();

		$italianChef = new ItalianChef();
		echo $italianChef->makeSalad();
		echo $italianChef->makePizza();
		echo $italianChef->makeSpecialDish();
	?>
</body>
</html>
