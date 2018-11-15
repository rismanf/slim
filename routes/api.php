<?php

$app->get('', function ($request, $response){
	return $response->withJson([
		'massage' => 'hello world',
	]);
});  