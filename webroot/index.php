<?php
use MyApp\Application\Bootstrap;

require_once  __DIR__.'/../vendor/autoload.php';
defined('APPLICATION_DIR') || define('APPLICATION_DIR', realpath(__DIR__ . '/..'));
defined('APPLICATION_NAME') || define('APPLICATION_NAME', 'MyApp');

$bootstrap = new Bootstrap();
$bootstrap->boot()->run();




