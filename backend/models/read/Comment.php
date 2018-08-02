<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/30 0030
 * Time: 下午 4:07
 */

namespace backend\models\read;


use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{
    public static function getList()
    {
        $list=Comment::find()->asArray()->all();
        return $list;
    }
}