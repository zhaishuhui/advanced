<?php
/**
 * Created by PhpStorm.
 * User: 安好
 * Date: 2018/7/28
 * Time: 16:10
 */

namespace backend\models\read;


use yii\db\ActiveRecord;

class Personal extends ActiveRecord
{
    public static function getList(){
        $arr=Personal::find()->asArray()->all();
        return $arr;
    }
}