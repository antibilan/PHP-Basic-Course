<?php

use MyApp\App;
use MyApp\Logger\LoggerFactory;

require __DIR__ . '/../vendor/autoload.php';

$config = require __DIR__ . '/../config.php';

LoggerFactory::setConfig($config);

$logger = LoggerFactory::getLogger();

$app = new App($logger);

$app->run();
