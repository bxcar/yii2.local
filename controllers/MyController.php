<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 07.03.2018
 * Time: 12:39
 */

namespace app\controllers;

class MyController extends AppController {
    public function actionIndex() {
        $hi = 'Hello, World!';
        $names = ['Petrov', 'Ivanov', 'Sidorov'];
        $id = $_GET['id'];
        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost() {
        return 'Blog Post';
    }
}