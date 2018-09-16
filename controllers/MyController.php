<?php

namespace app\controllers;



class MyController extends AppController
{

  public function actionIndex($id = null)
  {
    $hi = 'Sended info!';
    return $this->render('index', compact('hi','id'));
  }

}



?>
