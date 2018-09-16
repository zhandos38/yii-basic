<?php
/**
 * Created by PhpStorm.
 * User: ZHANDOS
 * Date: 15.09.2018
 * Time: 22:02
 */

namespace app\controllers;


use yii\helpers\VarDumper;

class PostController extends AppController
{
//    public $layout = 'basic';

    public function actionTest()
    {
        $games = [
            'Assassins Creed',
            'CS:GO',
            'Dota 2'
        ];

//        $this->debug($games);

//        VarDumper::dump($games, 1, true);

        return $this->render('test', compact('games'));
    }


    public function actionShow()
    {
        $this->layout = 'basic';
        return $this->render('show');
    }



}

