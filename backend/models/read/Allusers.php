<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/27 0027
 * Time: 下午 8:35
 */

namespace backend\models\read;


use yii\db\ActiveRecord;

class Allusers extends ActiveRecord
{
   public static function getList()
   {
      $list= Allusers::find()->asArray()->all();
      return $list;
    }
    //上传图片
    public static function upload($file){
        $fileDir='photo/';
        if(!file_exists($fileDir)){
            mkdir($fileDir,0777,true);
        }
        $extends=strrchr($file['name'],'.');
        $filename=date('YmdHis',time()).rand(0,1000).$extends;
        move_uploaded_file($file['tmp_name'],$fileDir.$filename);
        return '/'.$fileDir.$filename;
    }


}