<?php
namespace RayDiOnCake\Routing;

use Doctrine\Common\Cache\ApcCache;
use Ray\Di\Injector;

\App::uses('ClassRegistry', 'Utility');
\App::uses('Dispatcher', 'Routing');

class Dispatcher extends \Dispatcher
{
    /** @var Injector */
    public $injector;

    /**
     * @param bool $base
     */
    public function __construct($base = false)
    {
        parent::__construct($base);

        $this->injector = $this->createInjector();
    }

    /**
     * @param \Controller|\AppController $controller
     * @param \CakeRequest $request
     * @param \CakeResponse $response
     * @return \CakeResponse
     */
    protected function _invoke(\Controller $controller, \CakeRequest $request, \CakeResponse $response)
    {
        $controller->setInjector($this->injector);
        return parent::_invoke($controller, $request, $response);
    }

    /**
     * @return Injector
     */
    private function createInjector()
    {
        $cache = new ApcCache();
        $cache->setNamespace('ray/di');
        return Injector::create(
            [
                // listing to install modules
            ],
            $cache
        );
    }
}
