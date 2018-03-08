<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 07.03.2018
 * Time: 18:38
 */

namespace app\controllers;

use Yii;
use app\models\TestForm;

class PostController extends AppController {

    public $layout = 'basic';

    public function beforeAction($action) {
        return parent::beforeAction($action);
    }

    public function actionIndex() {

        if (Yii::$app->request->isAjax) {
            return $this->debug(Yii::$app->request->post());
        }

        $model = new TestForm();

        $this->view->title = 'Все статьи';
        return $this->render('index', compact('model'));
    }

    public function actionShow() {
        $this->view->title = 'Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);
        return $this->render('show');
    }
}