<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1 0001
 * Time: 下午 4:23
 */

namespace backend\models\read;


use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
    public static function getList()
    {
        $list= Author::find()->asArray()->all();
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