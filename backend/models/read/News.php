<?php
/**
 * Created by PhpStorm.
 * User: 安好
 * Date: 2018/7/30
 * Time: 15:48
 */

namespace backend\models\read;


use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function getList(){
        $arr=News::find()->asArray()->all();
        return $arr;
    }
}