<?php
namespace MyApp\Application;


use MyApp\Code\Core\Plugin\Provider\CoreControllerProvider;
use PrestoPHP\Framework\Application;
use PrestoPHP\Framework\Twig\Plugin\Provider\TwigServiceProvider;
use PrestoPHP\Provider\FormServiceProvider;
use PrestoPHP\Provider\ServiceControllerServiceProvider;
use PrestoPHP\Provider\ValidatorServiceProvider;

class Bootstrap {
	protected $application;

	public function __construct() {
		$this->application = new Application();
	}

	public function boot() {
		$this->initConfig();
		$this->registerServiceProviders();
		$this->registerControllerProviders();

		return $this->application;
	}

	protected function initConfig() {
		$this->application['debug'] = true;
		$this->application['locale'] = "de";

		//Load Application configs
		if($this->application['debug'] === true) {
			require_once __DIR__.'/Config/development.php';
		} else {
			require_once __DIR__.'/Config/development.php';
		}

		$this->application['config'] = $config;
	}

	protected function registerServiceProviders() {
		$this->application->register(new ServiceControllerServiceProvider());
		$this->application->register(new TwigServiceProvider(), $this->application['config'][ApplicationConstants::TWIG_OPTIONS]);
		//Use this if you are using i18n Services
		//$this->application->register(new TranslationServiceProvider());
		$this->application->register(new ValidatorServiceProvider());
		$this->application->register(new FormServiceProvider());


		//if($this->application['debug'] === true) $this->application->register(new WhoopsServiceProvider());
	}

	protected function registerControllerProviders() {
		foreach ($this->getControllerProviders() as $controllerProvider) {
			$this->application->mount('', $controllerProvider);
		}
	}

	protected function getControllerProviders() {
		return [
			new CoreControllerProvider()
		];
	}

}
