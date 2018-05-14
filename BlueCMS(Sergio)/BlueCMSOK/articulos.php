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
							<h2 class="h2_categorias mb-4"><i class="far fa-dot-circle fa-xs"></i> Artículos</h2>
						  <thead>
						    <tr>
						      <th scope="col">ID</th>
						      <th scope="col">TÍTULO</th>
						      <th scope="col">TÍTULO_URL</th>
						      <th scope="col">CATEGORÍA</th>
						      <th scope="col">IMAGEN</th>
						      <th scope="col"></th>
						      <th scope="col"></th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Terminator 1</td>
						      <td>terminator_1</td>
						      <td>Acción y Aventuras</td>
						      <td><img class="img_categorias" src="img/The-Terminator-Poster.jpg"></td>
						      <td><a class="btn btn-danger btn-sm" href="#" role="button"><i class="fas fa-trash-alt"></i></a></td>
						      <td><a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-pencil-alt"></i></a></td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Blade Runner</td>
						      <td>blade_runner</td>
						      <td>Ciencia Ficción</td>
						      <td><img class="img_categorias" src="img/The-Terminator-Poster.jpg"></td>
						      <td><a class="btn btn-danger btn-sm" href="#" role="button"><i class="fas fa-trash-alt"></i></a></td>
						      <td><a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-pencil-alt"></i></a></td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>American Pie</td>
						      <td>american_pie_1</td>
						      <td>Comedia</td>
						      <td><img class="img_categorias" src="img/The-Terminator-Poster.jpg"></td>
						      <td><a class="btn btn-danger btn-sm" href="#" role="button"><i class="fas fa-trash-alt"></i></a></td>
						      <td><a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-pencil-alt"></i></a></td>
						    </tr>
						    <tr>
						      <th scope="row">4</th>
						      <td>El Exorcista</td>
						      <td>el_exorcista</td>
						      <td>Acción y Aventuras</td>
						      <td><img class="img_categorias" src="img/The-Terminator-Poster.jpg"></td>
						      <td><a class="btn btn-danger btn-sm" href="#" role="button"><i class="fas fa-trash-alt"></i></a></td>
						      <td><a class="btn btn-success btn-sm" href="#" role="button"><i class="fas fa-pencil-alt"></i></a></td>
						    </tr>
						  </tbody>
					  	</table>
					  </div>
					  <br>

					  <h2 class="h2_categorias mt-5 mb-4"><i class="far fa-dot-circle fa-xs"></i> Crear nuevos artículos</h2>

					  <form>

							  <div class="form-group row">
							    <label for="inputEmail3" class="col-sm-2 col-form-label">Título</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="inputEmail3">
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="inputPassword3" class="col-sm-2 col-form-label">Título URL</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" id="inputPassword3">
							    </div>
							  </div>

							  <div class="form-group row">
							    <label for="inputPassword3" class="col-sm-2 col-form-label">Categoría</label>
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

						  <button type="submit" class="boton3 btn btn-dark">Crear nuevo artículo</button>
						  <div class="custom-file">
							  <input type="file" class="custom-file-input" id="customFileLang" lang="es">
							  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
						 </div>
							
					
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
