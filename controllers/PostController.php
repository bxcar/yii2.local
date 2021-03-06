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
use app\models\Category;

class PostController extends AppController {

    public $layout = 'basic';

    public function beforeAction($action) {
        return parent::beforeAction($action);
    }

    public function actionIndex() {

        if (Yii::$app->request->isAjax) {
            return $this->debug(Yii::$app->request->post());
        }

//        $post = TestForm::findOne(3);
        /*$post->email = '2@2.com';
        $post->save();*/
//        $post->delete();
//        return $this->debug($post);

        $model = new TestForm();
//        $model->name = 'Автор';
//        $model->email = 'mail@mail.com';
//        $model->text = 'Текст сообщения';
//        $model->save();

//        TestForm::deleteAll(['>', 'id', 5]);
//        TestForm::deleteAll();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return Yii::$app->getResponse()->redirect(Yii::$app->getRequest()->getUrl());
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        $this->view->title = 'Все статьи';
        return $this->render('index', compact('model'));
    }

    public function actionShow() {
        $this->view->title = 'Одна статья';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описание страницы...']);

//        $cats = Category::find()->all();
//        $cats = Category::find()->orderBy(['id' => SORT_ASC])->all();
//        $cats = Category::find()->asArray()->where('parent=691')->all();
//        $cats = Category::find()->asArray()->where(['parent' => 691])->all();
//        $cats = Category::find()->asArray()->where(['like', 'title', 'pp'])->all();
//        $cats = Category::find()->asArray()->where(['<=', 'id', '695'])->all();
//        $cats = Category::find()->asArray()->where('parent=691')->limit(1)->all();
//        $cats = Category::find()->asArray()->where('parent=691')->limit(1)->one();
//        $cats = Category::find()->asArray()->count();
//        $cats = Category::findOne(['parent' => 691]);
//        $cats = Category::findAll(['parent' => 691]);
//        $query = "SELECT * FROM categories WHERE title LIKE '%pp%'";
//        $cats = Category::findBySql($query)->asArray()->all();
//        $query = "SELECT * FROM categories WHERE title LIKE :search";
//        $cats = Category::findBySql($query, [':search' => '%pp%'])->asArray()->all();

//        $cats = Category::findOne(694);
//        $cats = Category::find()->with('products')->where('id=694')->all();
        //$cats = Category::find()->all(); //отложенная(ленивая) загрузка
        $cats = Category::find()->with('products')->asArray()->all(); //жадная загрузка

        return $this->render('show', compact('cats'));
    }
}