<?php
namespace Shop\controllers;

//require_once 'BaseController.php';

class IndexController extends BaseController
{
    public function indexAction()
    {
        $this->render('index/index');
    }
}