<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 09.03.2018
 * Time: 6:40
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord {
    public static function tableName() {
        return 'categories';
    }
}