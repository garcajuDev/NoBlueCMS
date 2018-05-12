<!DOCTYPE html>
<html>
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
	<link rel="stylesheet" href="estilos.css">
</head>


<body>
	<div class="container-fluid">

		<div class="header text-center text-white" style="margin-top: 10px;"></div>
			<nav aria-label="breadcrumb">
  				<ol class="breadcrumb">
    				<li class="breadcrumb-item active" aria-current="page">Home</li>
  				</ol>
		</nav>
	</div>

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  		<div class="carousel-inner">
    		<div class="carousel-item active">
     			<img class="d-block w-100" src="./view/img/carrousel1.png" alt="Cinema">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="./view/img/carrousel2.png" alt="Avengers">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="./view/img/carrousel3.png" alt="Titanic">
    		</div>
    		<div class="carousel-item">
      			<img class="d-block w-100" src="./view/img/carrousel4.png" alt="Rogue One Stars Wars">
    		</div>
  		</div>
	</div>

	<div class="nav justify-content-center" style="background-color:#004080; margin: 10px; border-radius: 5px;">
		<ul class="top_nav nav justify-content-center">
			<li class="nav-item">
				<a class="nav-link active" href="#">Home</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					   	<?php  
					       	foreach ($founded as $key => $cat) {
					       		$nameCat = $cat->name;
					       		echo "<a class='dropdown-item' href='#'>Películas de {$nameCat}</a>";
					       	}
					    ?>
					<div class="dropdown-divider"></div>
					    <a class="dropdown-item" href="#">Seguir buscando...</a>	        
					</div>
      		</li>
		</ul>
	</div>

	<div class="container">



			<div class="main mt-5">
				<h3 class="mb-3">CATEGORIAS DE PELÍCULAS</h3>
				<div class="card-deck mb-5">
					<?php 
						foreach ($founded as $key => $category) {
							$name = $category->name;
							$photo = $category->photo;
							$description = $category->description;

							echo "<div class='card w-25'>";
							echo "<img class='card-img-top' src='{$photo}' alt='Card image cap'>";
							echo "<div class='card-body'>";
							echo "<h4 class='h4_categoria'>{$name}</h4>";
							echo "<p>{$description}</p>";
							echo "<div class='card-footer'>";
							echo "<a href='#' class='btn btn-primary'>Continuar <i class='fas fa-angle-double-right'></i></a>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
						}
					?>
				</div>
			</div>

			<hr>
	</div>
	<section class="main_bottom mt-5" style="background-color:  #ccd1d1;">
	<div class="container">
				<div class="row mb-4">
					<div class="col-lg-3">
						<h3 class="mt-1">ÚLTIMAS PELÍCULAS AÑADIDAS:</h3>
						<h4 class="h4_consulta">Consulta aquí las<br/> últimas novedades<br/> de nuestro catálogo<br/> de películas</h4>
					</div>
					<div class="col-lg-3">
						<img class="card-img-top mb-4 img-thumbnail" src="img/novedades1.jpg" alt="Card image cap">
						<h6><strong>Titulo película:</strong> STAR TREK</h6>
						<h6><strong>Fecha:</strong> 15/08/2018</h6>
					</div>
					<div class="col-lg-3">
						<img class="card-img-top mb-4 img-thumbnail"  src="img/novedades2.jpg" alt="Card image cap">
						<h6><strong>Titulo película:</strong> TRAINSPOTTING</h6>
						<h6><strong>Fecha:</strong> 17/08/2018</h6>
					</div>
					<div class="col-lg-3">
						<img class="card-img-top mb-4 img-thumbnail" src="img/novedades3.jpg" alt="Card image cap">
						<h6><strong>Titulo película:</strong> FORT APACHE</h6>
						<h6><strong>Fecha:</strong> 19/08/2018 </h6>
					</div>
				</div>
	</div>
	</section>

			<hr>

	</div>
		<footer class="footer">
			<ul class="footer_list mt-5 ">
				<li><a href="#">Web Pública -</a></li>
				<li><a href="#">API REST -</a></li>
				<li><a href="zonaprivada.php">Zona Privada -</a></li>
				<li><a href="#">BlueCMS</a></li>
			</ul>
		</footer>

</body>
</html>
