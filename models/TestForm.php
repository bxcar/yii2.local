<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 08.03.2018
 * Time: 21:43
 */

namespace app\models;

//use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord {

    public static function tableName() {
        return 'posts';
    }

    public function attributeLabels() {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }

    public function rules() {
        return [
            [['name', 'text'], 'required', 'message' => 'Поле обязательно'],
            ['email', 'email'],
        ];
    }
}