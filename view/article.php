<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Article</title>
</head>
<body>
	<?php 
		foreach ($movie as $key => $pelicula) {
			$title = $pelicula->title;
			$url = $pelicula->title_url;
			$photo = $pelicula->photo;

			echo "$title<br>";
			echo "$url<br>";
			echo "$photo<br>";
		}
	?>
</body>
</html>