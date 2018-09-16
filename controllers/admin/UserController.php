<?php
/**
 * Created by PhpStorm.
 * User: ZHANDOS
 * Date: 15.09.2018
 * Time: 21:48
 */

namespace app\controllers\admin;



use app\controllers\AppController;

class UserController extends AppController
{

    public function actionIndex()
    {
        return $this->render('Index');
    }


}