<?php

use Slim\Http\Request;
use Slim\Http\Response;	
use Core\Example;
// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
	$example = new Example();
	$example->printDDD();
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
