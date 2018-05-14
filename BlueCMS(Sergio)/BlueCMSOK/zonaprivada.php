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
					    <a class="nav-link active" href="#">Home</a>
					  </li>

					  <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Categorias
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="accion.php">Peliculas de Acción y Aventuras</a>
					          <a class="dropdown-item" href="#">Películas de Ciencia Ficción</a>
					          <a class="dropdown-item" href="#">Películas de Comedia</a>
					          <a class="dropdown-item" href="#">Películas de Terror</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">Seguir buscando...</a>
					        </div>
      				  </li>
				</ul>

			</div>

			<div class="main mt-5">

				<form class="mt-5 mb-5">
						<br/>
					  <h2 style="color:firebrick; text-align:center; padding-bottom: 10px;">- ACCESO ZONA PRIVADA -</h2>
					  <hr>
					  <h3 class="h3_form mb-4 mt-5">INTRODUZCA SUS DATOS PERSONALES</h3>
					  <br>
					  <div class="form-group text">
					    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Su nombre">
					  </div>
					  <div class="form-group text">
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Su contraseña">
					  </div>
					  <br>
					  <div class="buttons mt-4">
						  <a href="zonaprivada2.php" class="boton2 btn btn-dark text-center">ENTRAR <i class="fas fa-angle-double-right"></i></a> 
						  <a href="index.php" class="boton2 btn btn-dark text-center">SALIR <i class="fas fa-angle-double-right"></i></a>
					 </div>
				</form>

			</div>
    </div>

			<footer class="footer">

				<ul class="footer_list mt-5">
					<li><a href="index.php">Web Pública -</a></li>
					<li><a href="#">API REST -</a></li>
					<li><a href="zonaprivada.php">Zona Privada -</a></li>
					<li><a href="#">BlueCMS</a></li>
				</ul>

			</footer>



</body>

</html>
