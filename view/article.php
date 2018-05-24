<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Práctica final BlueCMS</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo $urlBase; ?>/view/css/estilos.css">
</head>
<body>
	<div class="container-fluid">
		<div class="header text-center text-white"></div>
			<nav aria-label="breadcrumb" style="margin: 10px 0 10px 0;">
  				<ol class="breadcrumb">
    				<li class="breadcrumb-item"><a href="../">Home</a></li>
    				<li class="breadcrumb-item"><a href="<?php echo $urlBase;?>/categoria/<?php echo "{$movie[0]->category_id}";?>">Categorias</a></li>
    				<li class="breadcrumb-item"><?php echo "{$movie[0]->title}"?></li>
  				</ol>
			</nav>
	</div>

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
    		<div class="carousel-item active">
     			<img class="d-block w-100" src="<?php echo $urlBase;?>/view/img/carrousel1.png" alt="Cinema">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="<?php echo $urlBase;?>/view/img/carrousel2.png" alt="Avengers">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="<?php echo $urlBase;?>/view/img/carrousel3.png" alt="Titanic">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="<?php echo $urlBase;?>/view/img/carrousel4.png" alt="Rogue One Stars Wars">
    		</div>
  		</div>
	</div>

	<div class="nav justify-content-center" style="background-color:#004080; margin: 10px; border-radius: 5px;">
		<ul class="top_nav nav justify-content-center">
			<li class="nav-item">
				<a class="nav-link active" href="<?php echo "{$urlBase}/";?>">Home</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					   	<?php  
					       	foreach ($founded as $key => $cat) {
					       		$nameCat = $cat->name;
					       		$id = $cat->id;
					       		echo "<a class='dropdown-item categoryList' href='{$urlBase}/categoria/{$id}'>Películas de {$nameCat}</a>";
					       	}
					    ?>
				</div>
      		</li>
		</ul>
	</div>
	<?php 
		foreach ($movie as $key => $pelicula) {
			$id = $pelicula->id;
			$title = $pelicula->title;
			$url = $pelicula->title_url;
			$billboard = $pelicula->billboard;
			$arrayExp = explode(",",$pelicula->fichaTec);
			$infoPeli = array_slice($arrayExp, 0, 3);
			$act = array_slice($arrayExp,3); 
			$actores = implode(",",$act);
			$photo1 = $pelicula->photo1;
			$photo2 = $pelicula->photo2;
			$intro = $pelicula->firstPart;
			$final = $pelicula->secondPart;
		}
	?>
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-12"><img src="<?php echo $urlBase.$billboard;?>" class="img-thumbnail img_dossier" alt="Cartelera" />
					<h3><?php echo "$title"; ?></h3>
					<?php 
					echo "<ul>";
					 	foreach ($infoPeli as $dato){
							echo "<li>{$dato}</li>";
						} 
					echo "</ul>";
					echo "$actores";
					?>
					<br>
				<div class="sipnosis">
					<h3>Sipnosis</h3>
					<?php 
						echo "<p>$intro</p>";
						echo "<img src = '{$urlBase}{$photo1}' class='dossier rounded float-left mt-3 mb-4' alt='photo1' />";
						echo "<img src = '{$urlBase}{$photo2}' class='dossier rounded mb-4 mt-3' alt='photo2' />";
						echo "<p>$final</p>";
					?>
				</div>
			</div>
		</div>
	</div>
		<footer class="footer">
				<ul class="footer_list mt-5 ">
					<li><a href="#">Web Pública -</a></li>
					<li><a href="<?php echo $urlBase; ?>/view/apiDOC.html">API REST -</a></li>
					<li><a href="#">Zona Privada -</a></li>
					<li><a href="#">BlueCMS</a></li>
				</ul>
		</footer>
</body>
</html>