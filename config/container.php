<?php

$container = $app->getContainer();

$container['view'] = function ($container){
	$view = new Slim\Views\Twig('./../view',[
		'twig' => [
			'cache' => __DIR__ . './../storage/cache/views',
			'auto_reload'=> true,
		],
	]);
	
	$view->addExtension(new \Slim\Views\TwigExtension(
		$container->get('router'),
		$container->get('request')->getUri()
	));
	
	return $view;
};