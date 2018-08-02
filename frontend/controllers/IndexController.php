<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/7/30
 * Time: 18:35
 */

namespace frontend\controllers;


use yii\web\Controller;

class IndexController extends Controller
{
    public $layout=false;
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionQq(){
        return $this->render('qq');
    }
}