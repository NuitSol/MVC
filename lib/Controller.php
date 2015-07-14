<?php
/**
 * Created by PhpStorm.
 * User: nmakarenko
 * Date: 30.06.15
 * Time: 16:47
 */
namespace lib;

use lib\App;
use lib\View;

abstract class Controller
{
    public $view;
    public $app;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->view = new View();

        $file = __DIR__ . '/../view/' . $app->getController() . '/' . $app->getAction() . '.phtml';

        $this->view->setFile($file);
    }

    public function __destruct()
    {
        $this->view->show();
    }
}