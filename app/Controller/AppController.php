<?php
use Ray\Di\Injector;

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package        app.Controller
 * @link        http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /** @var Injector */
    private $injector;

    public function setInjector(Injector $injector)
    {
        $this->injector = $injector;
    }
}
