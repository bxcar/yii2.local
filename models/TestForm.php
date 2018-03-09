<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 08.03.2018
 * Time: 21:43
 */

namespace app\models;

use yii\base\Model;

class TestForm extends Model {
    public $name;
    public $email;
    public $text;

    public function attributeLabels() {
        return [
            'name' => 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
        ];
    }

    public function rules() {
        return [
            [['name', 'email'], 'required', 'message' => 'Поле обязательно'],
            ['email', 'email'],
            /*['name', 'string', 'min' => 2, 'tooShort' => 'Мало'],
            ['name', 'string', 'max' => 5, 'tooLong' => 'Много'],*/
            ['name', 'string', 'length' => [2,5]],
            ['name', 'myRule'],
            ['text', 'trim']
        ];
    }

    public function myRule($attrs) {
        if(!in_array($this->$attrs, ['hello', 'world'])) {
            $this->addError($attrs, 'Wrong!');
        }
    }
}