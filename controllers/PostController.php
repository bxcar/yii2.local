<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 07.03.2018
 * Time: 18:38
 */

namespace app\controllers;

use Yii;

class PostController extends AppController {

    public $layout = 'basic';

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionShow() {
//        $this->layout = 'basic';
        return $this->render('show');
    }
}