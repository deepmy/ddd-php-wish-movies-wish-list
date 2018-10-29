<?php

use Core\Domain\Entity\User;
use Slim\Http\Request;
use Slim\Http\Response;	
use Core\Example;
// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {

    /** @var \Doctrine\ORM\EntityManager $entityManager */
    $entityManager = $this->get(\Doctrine\ORM\EntityManager::class);
    $user = User::create('jojo', 'carlos');
    $entityManager->persist($user);
    $entityManager->flush();

	$example = new Example();
	$example->printDDD();
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
