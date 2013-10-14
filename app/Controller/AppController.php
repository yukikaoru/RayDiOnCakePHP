<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

use RayDiOnCake\Di\InjectorConfiguration;

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
    use InjectorConfiguration;

    /** @var \Ray\Di\Injector */
    protected $injector;

    public function __construct($request = null, $response = null)
    {
        $this->injector = $this->createInjector();

        parent::__construct($request, $response);
    }

}
