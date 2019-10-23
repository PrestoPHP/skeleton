<?php
namespace MyApp\Code\Core\Index;

use PrestoPHP\Framework\Application\Kernel\AbstractFactory;

/**
 * Class IndexFactory
 * @package MyApp\Code\Core\Index
 *
 * Factories are the place for your business code.
 */
class IndexFactory extends AbstractFactory {
    public function getTemplateVar() {
        return "World!";
    }
}
