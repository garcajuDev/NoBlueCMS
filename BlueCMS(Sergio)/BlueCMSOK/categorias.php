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
					    <a class="nav-link active" href="index.php">Home</a>
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

				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive-lg">
						  <table class="table table-hover">
							<h2 class="h2_categorias mb-4"><i class="far fa-dot-circle fa-xs"></i> Categorías</h2>
						  <thead>
						    <tr>
						      <th scope="col">ID</th>
						      <th scope="col">NOMBRE</th>
						      <th scope="col">NOMBRE_URL</th>
						      <th scope="col">DESCRIPCIÓN</th>
						      <th scope="col">ARTÍCULOS</th>
						      <th scope="col">IMAGEN</th>
						      <th scope="col"></th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Acción / Aventuras</td>
						      <td>Terminator_1</td>
						      <td>Película genero acción y aventuras dirigida por...</td>
						      <td>1</td>
						      <td><img class="img_categorias" src="img/The-Terminator-Poster.jpg"></td>
						      <td><a class="btn btn-danger btn-sm" href="#" role="button">X</a></td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Ciencia Ficción</td>
						      <td>blade_runner</td>
						      <td>Película mítica del genero Ciencia...</td>
						      <td>2</td>
						      <td><img class="img_categorias" src="img/The-Terminator-Poster.jpg"></td>
						      <td><a class="btn btn-danger btn-sm" href="#" role="button">X</a></td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Comedia</td>
						      <td>american_pie</td>
						      <td>Película genero comedia realizada y dirigida por el director</td>
						      <td>5</td>
						      <td><img class="img_categorias" src="img/The-Terminator-Poster.jpg"></td>
						      <td><a class="btn btn-danger btn-sm" href="#" role="button">X</a></td>
						    </tr>
						    <tr>
						      <th scope="row">4</th>
						      <td>Terror</td>
						      <td>el_exorcista</td>
						     <td>Película genero Terror premiada en numerosos...</td>
						     <td>7</td>
						      <td><img class="img_categorias" src="img/The-Terminator-Poster.jpg"></td>
						      <td><a class="btn btn-danger btn-sm" href="#" role="button">X</a></td>
						    </tr>
						  </tbody>
					  	</table>
					  </div>
					  <br>

					  <h2 class="h2_categorias mt-5 mb-4"><i class="far fa-dot-circle fa-xs"></i> Crear nuevas categorías</h2>
					  <form>

					  	<form>

						  <div class="form-group row">
						    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
						    <div class="col-sm-10">
						      <input type=text" class="form-control" id="inputEmail3">
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="inputPassword3" class="col-sm-2 col-form-label">Nombre URL</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" id="inputPassword3">
						    </div>
						  </div>

						  <div class="form-group row">
						    <label for="inputPassword3" class="col-sm-2 col-form-label">Descripción</label>
    						<textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
						  </div>

						  <div class="form-group row">
						    <label for="inputPassword3" class="col-sm-2 col-form-label">Imagen</label>
    						<img class="img_categorias" src="img/The-Terminator-Poster.jpg">
						  </div>

						</form>
						  <button type="submit" class="boton3 btn btn-dark">Añadir categoría</button>
							
						 <div class="custom-file">
							  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
							  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
						 </div>

						
					</form>
					</div>


				</div>

				

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
