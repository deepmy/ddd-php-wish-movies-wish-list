<?php

// bootstrap.php

use Doctrine\Common\Cache\FilesystemCache;
use Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\SimplifiedYamlDriver;
use Doctrine\ORM\Tools\Setup;
use Slim\Container;

require_once __DIR__ . '/vendor/autoload.php';

$container = new Container(require __DIR__ . '/src/settings.php');

$container[EntityManager::class] = function (Container $container): EntityManager {
    $config = Setup::createAnnotationMetadataConfiguration(
        $container['settings']['doctrine']['metadata_dirs'],
        $container['settings']['doctrine']['dev_mode']
    );

    $driver = new SimplifiedYamlDriver(
        new \Doctrine\Common\Annotations\AnnotationReader(),
        $container['settings']['doctrine']['metadata_dirs']
    );
    $path = __DIR__ . '/src/core/Infrastructure/Persistence/Doctrine/Mapping';
    $prefix = "Core\Domain";
    $locator = new SymfonyFileLocator([$path => $prefix], '.orm.yml');
    $driver->setLocator($locator);

    $config->setMetadataDriverImpl($driver);

    $config->setMetadataCacheImpl(
        new FilesystemCache(
            $container['settings']['doctrine']['cache_dir']
        )
    );

    return EntityManager::create(
        $container['settings']['doctrine']['connection'],
        $config
    );
};

return $container;