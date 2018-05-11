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
			'dbname' => 'world',
			'user' => 'root',
			'password' => ""
		];
		$dataConect = new Model($info);
		return $dataConect;
	};

	$app->get("/", "\Controller:loadHome");
	$app->run();
?>