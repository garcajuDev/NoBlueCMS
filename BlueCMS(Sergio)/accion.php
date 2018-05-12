<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Práctica final BlueCMS</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="estilos.css">
</head>

<style>

.categorias{

	height:640px;
}


 .card-title_ok{
	font-weight: 800;
	color: firebrick;
	font-size: 1.4rem;
	margin-bottom: 14px;
	margin-top: 8px;
}
	
	

</style>

<body>

	<div class="container-fluid">

		<div class="header text-center text-white"></div>

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a class="migadepan" href="#">HOME</a></li>
		    <li class="breadcrumb-item"><a class="migadepan" href="#">PELICULAS DE ACCIÓN Y AVENTURAS</a></li>
		    <li class="breadcrumb-item"><a class="migadepan" href="#">TERMINATOR 1</a></li>
		  </ol>
		</nav>
		
   </div>

	<div class="container">

			<div class="nav justify-content-center" style="background-color:#004080">

				<ul class="top_nav nav justify-content-center">

					  <li class="nav-item">
					    <a class="nav-link active" href="index.php">Home</a>
					  </li>
					  <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Categorias
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Películas de Acción y Aventuras</a>
				          <a class="dropdown-item" href="#">Películas de Ciencia Ficción</a>
				          <a class="dropdown-item" href="#">Películas de Musicales</a>
				          <a class="dropdown-item" href="#">Películas de Terror</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Seguir buscando...</a>
				        </div>
      					</li>
				</ul>
				
			</div>

			<div class="categorias mt-5">

				<h3 class="mb-3">PELÍCULAS DE ACCIÓN / AVENTURAS</h3>

				<hr>

				<div class="card-deck mt-4 mb-5">

			  <div class="card">
			    <img class="card-img-top" src="img/terminator.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title_ok">TERMINATOR I</h5>
			      <hr>
			      <p class="card-text">La saga trata sobre la batalla futura entre el programa de inteligencia artificial Skynet y la humanidad, liderada por John Connor. Los productos más conocidos de Skynet en sus objetivos genocidas son los diferentes modelos de Terminator, tales como el T-800, interpretado por Arnold Schwarzenegger, y unidades similares también retratado en las películas posteriores...</p>
			      <p class="card-text"><class="text-muted"><strong>ACTORES:</strong> Arnold Schwarzenegger, Linda Hamilton, Michael Biehn...</p>
			    </div>
			    <a href="dossier.php" class="boton btn btn-dark text-center">Continuar <i class="fas fa-angle-double-right"></i></a>
			  </div>

			  <div class="card">
			    <img class="card-img-top" src="img/killbill.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title_ok">KILL BILL VOLUMEN 1</h5>
			      <hr>
			      <p class="card-text">Kill Bill es una película de acción y suspense de dos partes estrenada en 2003 y 2004 respectivamente, que fue escrita y dirigida por Quentin Tarantino. Kill Bill originalmente fue propuesta para tener un lanzamiento único en los cines, pero con una duración de más de cuatro horas...</p>
			      <p class="card-text"><class="text-muted"><strong>ACTORES:</strong> Uma Thurman, David Carradine, Lucy Liu, Michael Madsen...</p>
			    </div>
			    <a href="#" class="boton btn btn-dark text-center">Continuar <i class="fas fa-angle-double-right"></i></a>
			  </div>

			  <div class="card">
			    <img class="card-img-top" src="img/elcaballerooscuro.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title_ok">EL CABALLERO OSCURO</h5>
			      <hr>
			      <p class="card-text">Es una película de superhéroes británico-estadounidense de 2008 dirigida por Christopher Nolan, escrita por Nolan y su hermano Jonathan Nolan y producida por Emma Thomas, Charles Roven y el mismo Nolan. Basada en el personaje Batman de DC Comics, la película es la segunda parte...</p>
			      <p class="card-text"><class="text-muted"><strong>ACTORES:</strong> Christian Bale, MIchael Caine, Heath Ledger, Gary Oldman, Aaron Eckhart...</p>
			    </div>
			    <a href="#" class="boton btn btn-dark text-center">Continuar <i class="fas fa-angle-double-right"></i></a>
			  </div>

				</div>

			</div>
 
			
		   </div>
		   <br>
		

			<footer>

				<ul class="footer_list mt-5">
					<li><a href="index.php">Web Pública -</a></li> 
					<li><a href="#">API REST -</a></li> 
					<li><a href="zonaprivada.php">Zona Privada -</a></li> 
					<li><a href="#">BlueCMS</a></li> 
				</ul>
				
			</footer>


	</div>

	
</body>
</html>