<?php
/**
 * Created by PhpStorm.
 * User: Magzhan
 * Date: 17.09.2018
 * Time: 14:10
 */

namespace app\controllers;


use yii\helpers\VarDumper;
use yii\web\Controller;

class PostController extends Controller
{
    public $layout = 'basic';

    public function actionIndex()
    {
        if(\Yii::$app->request->isAjax) {
            VarDumper::dump($_GET);
            return 'test';
        }
        return $this->render('index');
    }

    public function actionShow()
    {
        return $this->render('show');
    }

}