<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/30 0030
 * Time: 下午 3:12
 */

namespace backend\models\read;


use yii\db\ActiveRecord;

class Chapter extends ActiveRecord
{
    public static function getList()
    {
        $list= Chapter::find()->asArray()->all();
        return $list;
    }
}