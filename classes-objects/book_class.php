<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book Class</title>
</head>
<body>
	<?php 
		class Book {
			var $title;
			var $author;
			var $pages;	
		}

		$book1 = new Book;
		$book1->title = "How To Find Your Socks Easily Pt.1" ;
		$book1->author = "Kanurio Lávaro";
		$book1->pages = 89;

		$book2 = new Book;
		$book2->title = "Who Took My Socks In The First Place";
		$book2->author = "Alfajor Pelóntido Doblado";
		$book2->pages = 940;

		echo "<h2>$book1->title</h2>";
		echo "<h2>$book2->title</h2>"
	?>
</body>
</html>
