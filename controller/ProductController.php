<?php
/**
 * Created by PhpStorm.
 * User: nmakarenko
 * Date: 30.06.15
 * Time: 17:51
 */
namespace controller;

use lib\Controller;

class ProductController extends Controller
{
    public function indexAction()
    {
        $this->view->assign('b', 'bbb');
    }

    public function productAction()
    {
        $productModel = $this->app->getModel('product');

        $a = $productModel->getProduct(1);
        $this->view->assign('product', $a);
    }
}