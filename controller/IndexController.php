<?php
/**
 * Created by PhpStorm.
 * User: nmakarenko
 * Date: 30.06.15
 * Time: 16:47
 */
namespace controller;

use lib\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $this->view->assign('name', 'Natasha');
        $this->view->assign('email', 'sanr@gmail.com');

        $userModel = $this->app->getModel('user');

        $a = $userModel->fetchAll();
        $this->view->assign('a', $a);
    }

    public function testAction()
    {

    }
}