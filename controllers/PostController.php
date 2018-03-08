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

    public function beforeAction($action) {
        /*if ($action->id == 'index') {
            $this->enableCsrfValidation = false;
        }*/

        return parent::beforeAction($action);
    }

    public function actionIndex() {

        if (Yii::$app->request->isAjax) {
//            return $this->debug($_POST);
            return $this->debug(Yii::$app->request->post());
//            return $_POST;
        }

        return $this->render('index');
    }

    public function actionShow() {
//        $this->layout = 'basic';
        return $this->render('show');
    }
}