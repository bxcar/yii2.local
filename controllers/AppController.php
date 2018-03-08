<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 07.03.2018
 * Time: 18:33
 */

namespace app\controllers;


use yii\base\Controller;

class AppController extends Controller {
    public function debug($arr) {
        return '<pre>' . print_r($arr, true) . '</pre>';
    }
}