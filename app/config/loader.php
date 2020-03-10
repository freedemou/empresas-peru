<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir,
        $config->application->servicesDir
    ]
)->register();

include __DIR__ . '/../../vendor/autoload.php';