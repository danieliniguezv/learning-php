<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Getters and Setters</title>
</head>
<body>
	<?php 
		class Movie {
			public $title;
			private $rating; // Private visibility only allows for this attribute to be called from within the class.

			function __construct($title, $rating){
				$this->title = $title;
				$this->setRating($rating);
			}

			function getRating(){
				return $this->rating;
			}

			function setRating($rating){
				if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
					$this->rating = $rating;
				} else {
					echo "Please enter a valid rating: G, PG, PG-13, R, NR <br>";
				}
			}
		}

		$trainspotting = new Movie("Trainspotting", "Lombardo");
		$trainspotting->setRating("Padalustro");
		$trainspotting->setRating("R");
		echo $trainspotting->getRating() . "<br>";
	?>
</body>
</html>
