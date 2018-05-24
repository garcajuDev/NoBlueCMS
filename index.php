<?php 
	require_once "vendor/autoload.php";
	require_once "controller.php";
	require_once "model/model.php";

	$configuration = [
		'settings' => [
			'displayErrorDetails' => true,
		]
	];
	$c = new \Slim\Container($configuration);
	$app = new Slim\App($c);

	//Vista
	$c=$app->getContainer();
	$c['view']=function(){
		global $c;
		$renderer = new Slim\Views\PhpRenderer('view');
		$renderer->addAttribute("urlBase", $c->get('request')->getUri()->getBasePath());
		return $renderer;
	};

	//Modelo
	$c['modelo'] = function(){//Datos de la conexión
		$info = [
			'host' => 'localhost',
			'dbname' => 'nobluecms2',
			'user' => 'root',
			'password' => ""
		];
		$dataConect = new Model($info);
		return $dataConect;
	};

	$app->get("/", "\Controller:loadHome");
	$app->get("/categoria/{cod}", "\Controller:loadCategoryScreen");
	$app->get("/article/{url}", "\Controller:loadArticleScreen");

	//API
	$app->get("/api/categorias", "\Controller:getCategoriesAPI");
	$app->get("/api/categorias/{id}", "\Controller:getCategoriesAPIId");
	$app->get("/api/articulos/{id}", "\Controller:getArticleAPIId");
	$app->get("/api/articulos/", "\Controller:getArticlesAPIFilter");
	$app->get("/api/doc","\Controller:loadDocAPI");
	$app->get("[/{params:.*}]","\Controller:NotFound");  //CV Add if route not valid  
	$app->run();
?>
