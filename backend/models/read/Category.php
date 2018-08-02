<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/31 0031
 * Time: 上午 7:05
 */

namespace backend\models\read;



use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function get(){
        $table=Category::find()->asArray()->all();
        return $table;
    }
}