<?php
require 'vendor/autoload.php';
require 'config.php';


$app = new \Slim\Slim();

$app->get('/films', function () use ( $app, $orm ){
	$films = $orm->films()->find();
	$app->response->headers->set('Content-Type', 'application/json');
	foreach ($films as $film) {
		$_films[] = [
			'id' => $film->id,
			'director' => $film->director,
			'title' => $film->title,
			'notation' => $film->stars
		];
	}
	echo json_encode($_films); 
});

$app->run();

?>