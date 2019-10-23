<?php
namespace MyApp\Code\Core\Plugin\Provider;

use MyApp\Code\Core\Index\Controller\IndexController;
use MyApp\Code\Core\Test\Controller\TestController;
use PrestoPHP\Application;
use PrestoPHP\Framework\Application\Plugin\Provider\AbstractControllerProvider;

class CoreControllerProvider extends AbstractControllerProvider {
	protected function setupControllers(Application $app) {
	    $this->createGetController("/", IndexController::class, "index");
	}
}
