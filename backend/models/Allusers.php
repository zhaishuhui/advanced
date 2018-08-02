<?php
/**
 * Created by PhpStorm.
 * User: 28267
 * Date: 2018/7/28
 * Time: 14:59
 */

namespace backend\models;


use yii\db\ActiveRecord;


class Allusers extends  ActiveRecord
{

    public static function getList(){
      $data = Allusers::find()->asArray()->all();
     return $data;
    }
}