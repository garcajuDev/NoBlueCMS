create database nobluecms2;

create table users (
	id integer not null primary key,
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

create table in_content (
	id integer not null auto_increment primary key,
	photo1 varchar (100),
	photo2 varchar (100),
	fichaTec longtext, 
	firstPart longtext,
	secondPart longtext
);

create table articles (
	id integer not null primary key auto_increment,
	title varchar (100) not null,
	title_url varchar(100) unique,
	billboard varchar (100),
	dateAdd date,
	content_id integer not null,
	username integer not null,
		foreign key(content_id) references in_content(id),
		foreign key(username) references users(id)
);

create table in_category (
	article_id integer not null,
	category_id integer not null,
		foreign key(article_id) references articles(id),
		foreign key(category_id) references categories(id)
);

insert into categories(name, photo, description, name_url) values 
	('Accion','./view/photo/home/cat_action.jpg','El llamado cine de acción es un género cinematográfico en el que prima la espectacularidad de las imágenes por medio de efectos especiales de estilo "clásicos". Esto es: explosiones y combates con/sin armas cuerpo a cuerpo y persecuciones. Todo muy "físico" - y sin apenas CGI - dejando al margen cualquier otra consideración. ','accion'),
	('Ciencia Ficcion','./view/photo/home/cat_syfy.jpg','El cine de ciencia ficción es un género cinematográfico que utiliza representaciones especulativas basadas en la ciencia de fenómenos imaginarios como extraterrestres, planetas alienígenas y viajes en el tiempo, a menudo junto con elementos tecnológicos como naves espaciales futuristas, robots y otras tecnologías.','syfy'),
	('Western','./view/photo/home/cat_western.jpg','El wéstern es un género cinematográfico típico del cine estadounidense que se ambienta en el Viejo Oeste estadounidense. La palabra western, originariamente un adjetivo derivado de west («oeste», en inglés), se sustantivó para hacer referencia fundamentalmente a obras cinematográficas','western'),
	('Romance','./view/photo/home/cat_romantic.jpg','El cine romántico es un género cinematográfico que se caracteriza por retratar argumentos construidos de eventos y personajes relacionados con la expresión del amor y las relaciones románticas. El cine romántico se centra en la representación de una historia amorosa de dos participantes','romantic');

//TODO seguir insetando datos