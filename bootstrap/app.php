<?php 

require __DIR__ . './../vendor/autoload.php';

$settings = require __DIR__ . './../config/settings.php';
// var_dump($settings);die;
$app = new \Slim\App($settings);

require __DIR__ . './../config/container.php';

$app->group('/api', function() use ($app){
	require __DIR__ . './../routes/api.php';
});

$app->group('',function() use ($app){
	require __DIR__ . './../routes/web.php';
});