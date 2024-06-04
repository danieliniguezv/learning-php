<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Book Class With Constructor</title>
</head>
<body>
	<?php 
		class Book {
			var $title;
			var $author;
			var $pages;	

			function __construct($bookTitle, $bookAuthor, $numberOfPages){
				$this->title = $bookTitle;
				$this->author = $bookAuthor;
				$this->pages = $numberOfPages;
			}
		}

		$book1 = new Book("How To Find Your Socks Easily Pt.1", "Kanurio Lávaro", 89);
		$book2 = new Book("Who Took My Socks In The First Place", "Alfajor pelóntido Doblado", 940);

		echo "<h2>$book1->title</h2>";
		echo "<h2>$book2->title</h2>"
	?>
</body>
</html>
