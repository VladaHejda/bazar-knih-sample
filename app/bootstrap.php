<?php

require __DIR__ . '/../vendor/autoload.php';

$configurator = new Nette\Configurator;

$configurator->setDebugMode(['127.0.0.1']);
$configurator->enableDebugger(__DIR__ . '/../log');
$configurator->setTempDirectory(__DIR__ . '/../temp');

$configurator->addConfig(__DIR__ . '/config/.config.neon');
$configurator->addConfig(__DIR__ . '/config/.config.local.neon');

$container = $configurator->createContainer();

return $container;
