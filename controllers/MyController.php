<?php

namespace app\controllers;

use yii\web\Controller;



class MyController extends Controller {
    public function actionIndex()
    {
        $this->layout = 'basic';
        $myVar = 'Sended myVar!';
        return $this->render('index', compact('myVar'));
    }
}
