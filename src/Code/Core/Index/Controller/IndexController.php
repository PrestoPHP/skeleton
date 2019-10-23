<?php
namespace MyApp\Code\Core\Index\Controller;

use PrestoPHP\Framework\Application\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController {

	public function index(Request $request) {
		$templateVar = $this->getFactory()->getTemplateVar();

        return $this->assign(['templateVar' => $templateVar]);
	}

}
