<?php
namespace shop\controllers;
//require_once 'BaseController.php';

class SashaController extends BaseController
{
    public function indexAction()
    {
        $this->render('sasha/index');
    }
}
