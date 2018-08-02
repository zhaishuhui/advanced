<?php
/**
 * Created by PhpStorm.
 * User: lixiuyu
 * Date: 2018/7/30
 * Time: 15:55
 */

namespace backend\models\read;


use yii\db\ActiveRecord;

class Message extends ActiveRecord
{
    public static function upload($file)
    {   //图片的目录
        $bashDir = 'uploads';
        //判断  没有新建
        if(!file_exists($bashDir))
        {
            mkdir($bashDir,0777,true);
        }
        $extends = strrchr($file['name'],'.');

        $filename=date('YmdHis',time()).rand(0,1000).$extends;
        move_uploaded_file($file['tmp_name'],$bashDir.'/'.$filename);
        return '/'.$bashDir.'/'.$filename;
    }
}