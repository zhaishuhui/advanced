<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1 0001
 * Time: 下午 3:59
 */

namespace backend\models\read;


use yii\db\ActiveRecord;

class Monthly extends ActiveRecord
{
    public static function getList()
    {
        $list= Monthly::find()->asArray()->all();
        return $list;
    }
}