<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/8/1
 * Time: 16:09
 */

namespace frontend\models\read;


use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
    public static function getAuthorList()
    {
        $list=Author::find()->asArray()->all();
        return $list;
    }
}