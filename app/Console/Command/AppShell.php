<?php
/**
 * AppShell file
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 2.0
 */

use RayDiOnCake\Di\InjectorConfiguration;

App::uses('Shell', 'Console');

/**
 * Application Shell
 *
 * Add your application-wide methods in the class below, your shells
 * will inherit them.
 *
 * @package       app.Console.Command
 */
class AppShell extends Shell
{
    use InjectorConfiguration;

    /** @var \Ray\Di\Injector */
    protected $injector;

    public function __construct($stdout = null, $stderr = null, $stdin = null)
    {
        $this->injector = $this->createInjector();

        parent::__construct($stdout, $stderr, $stdin);
    }

}
