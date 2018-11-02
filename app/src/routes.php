<?php

use Core\Domain\Entity\User;
use Slim\Http\Request;
use Slim\Http\Response;	
use Core\Example;
// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {

    /** @var \Doctrine\ORM\EntityManager $entityManager */
    $entityManager = $this->get(\Doctrine\ORM\EntityManager::class);
    $contact = \Core\Domain\ValueObject\Contact::create('Juan', 'Perez', 'juan@gmail.com', '567676');
    $address = \Core\Domain\ValueObject\Address::create('Peru', 'Lima', 'La molina');
    $user = User::create('deepmy', '1234', $contact, $address);
    $entityManager->persist($user);
    $entityManager->flush();

	$example = new Example();
	$example->printDDD();
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
