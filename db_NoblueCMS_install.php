<!DOCTYPE html>
<html lang="es">
<head>
	<!--CVera Codigo basado ejemplo clase -->
	<meta charset="UTF-8">
	<title>Installation Database 'NoBlueCMS' </title>
	<style>
		html{
			font-family: Arial, sans-serif;
		}
		.ok{
			color:green;
		}
		.error{
			color:red;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h1>Installation Database 'NoBlueCMS'</h1>
	<hr>

	<?php 
		//Connecting MySql
		try {
			$conect = new PDO("mysql:host=localhost", "root", "");
			//$conect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$errorInfo = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

		} catch (PDOException $e) {
			echo "<p style = 'color:red;'>{$e->getMessage()}</p>";
		}
		//Creating structures
		$sql = "create database nobluecms3 character set utf8 COLLATE utf8_general_ci";
		$ok = $conect->exec($sql);
		if (!$ok) {
			echo "<p class='error'>Error creating BD. Unrealized installation !! </p>";
			echo "<p class='error'>".$conect->errorInfo()[2]."</p>";
		}else{ 
			echo "<p class='ok'>DB 'NoBlueCMS created !!</p>";
		

	
		$sql="use nobluecms3";
		$ok=$conect->exec($sql);
		if ($ok===false) {
			echo "<p class='error'>Fail to connect to the db 'NoBlueCMS' </p>";                                                            
			echo "<p class='error'>".$conect->errorInfo()[2]."</p>";                                                            
		}else{
			echo "<p class='ok'>Connection successfully!!</p>";
		}

		//Creación tabla Contactos
		$sql=" create table users (
						username varchar(20) not null primary key,
						hash char(64),
						publicname text
					);

					create table categories (
						id integer not null primary key auto_increment,
						name varchar(50) not null unique,
						photo text,
						description text,
						name_url varchar (50)
					);

					create table articles (
						id integer not null primary key auto_increment,
						title varchar (100) not null,
						title_url varchar(100) unique,
						billboard varchar (100),
						dateAdd date,
						content_id integer,
						username varchar(20) not null,
							foreign key(username) references users(username)
					);

					create table in_content (
						id integer not null  primary key auto_increment,
						article_id integer not null,
						photo1 varchar (100),
						photo2 varchar (100),
						fichaTec longtext, 
						firstPart longtext,
						secondPart longtext
					);

					create table in_category (
						article_id integer not null,
						category_id integer not null,
							foreign key(article_id) references articles(id),
							foreign key(category_id) references categories(id)
					);

		";
		$ok=$conect->exec($sql);
		if ($ok===false) {
			echo "<p class = 'error'>Error creanting structures</p>";
			echo "<p class = 'error>".$conect->errorInfo()[2]."</p>";
		}else{
				echo "<p class  ='ok'>Structures database OK !!</p>";
		//Creating sample content

		$sql = " insert into users (username, hash, publicname) values
						('carver', null, 'Carmen Vera'),
						('garcaju', null, 'Juan Garcia'),
						('serrod', null, 'Sergio Rodriguez');

									
				insert into categories(name, photo, description, name_url) values 
						('Accion','./view/photo/categories/cat_action.jpg','El llamado cine de acción es un género cinematográfico en el que prima la espectacularidad de las imágenes por medio de efectos especiales de estilo \'clásicos\'. Esto es: explosiones y combates con/sin armas cuerpo a cuerpo y persecuciones. Todo muy \'físico\' - y sin apenas CGI - dejando al margen cualquier otra consideración.','accion'),
						('Ciencia Ficcion','./view/photo/categories/cat_syfy.jpg','El cine de ciencia ficción es un género cinematográfico que utiliza representaciones especulativas basadas en la ciencia de fenómenos imaginarios como extraterrestres, planetas alienígenas y viajes en el tiempo, a menudo junto con elementos tecnológicos como naves espaciales futuristas, robots y otras tecnologías.','syfy'),
						('Western','./view/photo/categories/cat_western.jpg','El wéstern es un género cinematográfico típico del cine estadounidense que se ambienta en el Viejo Oeste estadounidense. La palabra western, originariamente un adjetivo derivado de west («oeste», en inglés), se sustantivó para hacer referencia fundamentalmente a obras cinematográficas','western'),
						('Romance','./view/photo/categories/cat_romantic.jpg','El cine romántico es un género cinematográfico que se caracteriza por retratar argumentos construidos de eventos y personajes relacionados con la expresión del amor y las relaciones románticas. El cine romántico se centra en la representación de una historia amorosa de dos participantes','romantic');
				
	
					insert into articles(title, title_url, billboard, dateAdd, content_id, username) values
						('El bueno, el feo y el malo','elbuenoelfeoyelmalo','./view/photo/billboard/art_mov1.png','2018-05-01',1,'serrod'),
						('La Momia 2','lamomia2','./view/photo/billboard/art_mov2.png','2018-05-03',2,'garcaju'),
						('Family Man','familyman','./view/photo/billboard/art_mov3.png','2018-05-09',3,'carver'),
						('El Patriota','elpatriota','./view/photo/billboard/art_mov4.png','2018-05-15',4,'serrod'),
						('Fast & Furious 8','fast8','./view/photo/billboard/art_mov5.png','2018-05-16',5,'garcaju'),
						('Avengers: Infinity War','avengersinfinitywar','./view/photo/billboard/art_mov6.png','2018-05-17',6,'garcaju');

					insert into in_content (photo1, photo2, fichaTec, firstPart, secondPart) values
						('./view/photo/articles/art_photo1.png','./view/photo/articles/art_photo2.png','Il buono, il brutto, il cattivo, 1966, Italia, Clint Eastwood, Lee Van Cleef, Eli Wallach, Aldo Giuffrè, Rada Rassimov, Mario Brega, Luigi Pistilli, Aldo Sambrell, Enzo Petito, Claudio Scarchilli, Al Mulock, John Bartha, Livio Lorenzon, Antonio Molino Rojo, Sandro Scarchilli, Chelo Alonso','Un pistolero a sueldo conocido como Sentencia (Lee van Cleef), llega a un pequeño pueblo a hacer un trabajo. De casualidad se entera sobre la existencia de una caja repleta de dólares, de la que sólo un tal Bill Carlson conoce su paradero. Por otro lado están Rubio (C. Eastwood) y Tuco (Eli Wallach), un solitario y un delincuente que se las apañan para ir estafando de pueblo en pueblo cobrando recompensas por nada, mientras tratan de soportarse el uno al otro como bien pueden.',' En una de sus \'disputas\' se encuentran fortuitamente con un agonizante Bill Carlson, que les revela - a cada uno una parte de la dirección - donde está la caja. Comienza entonces una carrera entre los tres por hacerse con el dinero, en la que nadie puede fiarse de nadie.'),
						('./view/photo/articles/art_photo3.png','./view/photo/articles/art_photo4.png','The Mummy Returns, 2001, Estados Unidos, Brendan Fraser, Rachel Weisz, John Hannah, Arnold Vosloo, Oded Fehr, Patricia Velasquez, Dwayne 'The Rock' Johnson, Freddie Boath, Alun Armstrong, Joe Dixon, Aharon Ipalé, Quill Roberts, Donna Air, Adewale Akinnuoye-Agbaje, Tom Fisher, Shaun Parkes','En 1935, Rick O´Connell y su mujer Evelyn llevan una vida tranquila en Londres con Álex, su hijo prodigio. Pero una nueva catástrofe se está formando en las profundidades del desierto sahariano. Seis mil años antes de nuestra era, el Rey Escorpión, hace un pacto con el Dios Anubis y luego le traiciona. Condenado por la eternidad, está a punto de salir del limbo y despertar al ejército de Anubis para devastar el planeta','Una secta misteriosa y ávida de poder dirigida por el diabólico Lock Nah y la seductora Meela, devuelven a la vida a la única criatura capaz de enfrentarse al Rey Escorpión: el sumo sacerdote Imhotep, condenado desde hace tres mil años a errar como un muerto viviente por haber seducido a la favorita del Faraón. Su momia se encuentra en una sala secreta del museo británico. Ardeth Bay, jefe militar de los Medja, suplica a O´Connel que impida este acontecimiento de consecuencias desastrosas.'),
						('./view/photo/articles/art_photo5.png','./view/photo/articles/art_photo6.png','The Family Man, 2000, Estados Unidos, Nicolas Cage, Téa Leoni, Don Cheadle, Amber Valletta, Jeremy Piven, Saul Rubinek, Josef Sommer, Mary Beth Hurt, Makenzie Vega, Francine York, Harve Presnell, Ruth Williamson, Kate Walsh, Ken Leung','Jack Campbell es un exitoso tiburó de Wall Street, con una lujosa vida y poco tiempo para sus amigos y familia. Una noche, su vida cambia drástivamente al cruzase con un extraño individuo, y a la mañana siguiente se despierta en un barrio humilde, al lado de Kate, su antiua novia de instituto, y rodeado por dos crios. Descubre que toda su vida anterior ha desaparecido, y tendrá que adaptarse a su nuevo rol de marido y padre ideal.','Pero llegará un momento en que tendrá que enfrentarse a la elección entre su carrera de éxito y la mujer que ama.'),
						('./view/photo/articles/art_photo7.png','./view/photo/articles/art_photo8.png','The patriot, 2000, Alemania, Mel Gibson, Heath Ledger, Joely Richardson, Jason Isaacs, Chris Cooper, Tchéky Karyo, Rene Auberjonois, Lisa Brenner, Tom Wilkinson, Donal Logue','Año 1776, en plena guerra de Independencia entre los colonos de Nueva Inglaterra y las tropas de Jorge III (1760-1820). En Carolina del Sur, el viudo Benjamin Martin (Mel Gibson), heroico soldado en Francia y en la India, renuncia a combatir para cuidar de sus siete hijos. Pero la pacífica vida de la familia Martin se ve alterada cuando Gabriel (Heath Ledger), el hijo mayor, se alista en el ejército; mientras tanto su padre se esfuerza por sacar adelante a la prole.','Sin embargo, los británicos, al mando del cruel coronel Tavington (Jason Isaacs), llegarán hasta las puertas de su casa poniendo en peligro a toda la familia.'),
						('./view/photo/articles/art_photo9.png','./view/photo/articles/art_photo10.png','The Fate of the Furious, 2017, Estados Unidos , Vin Diesel, Dwayne 'The Rock' Johnson, Jason Statham, Charlize Theron, Michelle Rodriguez, Tyrese Gibson, Ludacris, Nathalie Emmanuel, Scott Eastwood, Kurt Russell, Kristofer Hivju, Helen Mirren, Elsa Pataky, Luke Evans, Don Omar, Tego Calderón','Con Dom y Letty de luna de miel, Brian y Mia fuera del juego y el resto de la pandilla exonerada de todo cargo, el equipo está instalado en una vida aparentemente normal. Pero cuando una misteriosa mujer (Theron) seduce a Dom (Diesel) para regresar nuevamente al mundo del crimen, se ve incapaz de rechazar la oportunidad, traicionando así a todo el mundo cercano a él. A partir de ese momento todos se enfrentarán a pruebas como nunca antes habían tenido.','Desde las costas de Cuba y las calles de Nueva York hasta las llanuras del mar de Barents en el océano Ártico, nuestra fuerza de élite recorrerá el globo para impedir que un anarquista desencadene el caos en el mundo... y por supuesto para traer de vuelta a casa al hombre que les hizo una familia.'),
						('./view/photo/articles/art_photo11.png','./view/photo/articles/art_photo12.png','Avengers: Infinity War, 2018, Estados Unidos, Robert Downey Jr., Chris Hemsworth, Benedict Cumberbatch, Chris Evans, Mark Ruffalo, Scarlett Johansson, Chris Pratt, Tom Holland, Josh Brolin, Elizabeth Olsen, Chadwick Boseman, Pom Klementieff, Terry Notary, Dave ´The Animal´ Batista, Karen Gillan, Tessa Thompson, Zoe Saldana, Gwyneth Paltrow, Tom Hiddleston, Cobie Smulders, Paul Bettany, Sebastian Stan, Peter Dinklage, Samuel L. Jackson, Benicio del Toro, Danai Gurira, Benedict Wong, Anthony Mackie, Don Cheadle, Idris Elba, Vin Diesel, Bradley Cooper, William Hurt, Stan Lee, Ross Marquand','Un nuevo peligro acecha procedente de las sombras del cosmos. Thanos, el infame tirano intergaláctico, tiene como objetivo reunir las seis Gemas del Infinito, artefactos de poder inimaginable, y usarlas para imponer su perversa voluntad a toda la existencia. Los Vengadores y sus aliados tendrán que luchar contra el mayor villano al que se han enfrentado nunca, y evitar que se haga con el control de la galaxia.','En su nueva e impactante aventura, el destino de la Tierra nunca había sido más incierto, las Gemas del Infinito estarán en juego, unos querrán protegerlas y otros controlarlas, ¿quién ganará?');

					insert into in_category (article_id, category_id) values
						(1,3),
						(2,1),
						(3,4),
						(4,1),
						(5,1),
						(6,2);

		";
	
		$ok = $conect->exec($sql);
		if ($ok===false) {
			echo "<p class = 'error'>Error to insert info 'NoBlueCMS' </p>";
			echo "<p class = 'error>".$conect->errorInfo()[2]."</p>";
			}else{
			echo "<p class  ='ok'>Add info sample to 'NoBlueCMS'!! <BR> <BR> The installation was finished. </p>";
		}


		
		}	// end creating tables
	} // end connecting MySql			
	?>
</body>
</html>