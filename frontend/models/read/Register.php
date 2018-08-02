<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/7/27
 * Time: 20:02
 */

namespace frontend\models\read;


use yii\db\ActiveRecord;

class Register extends ActiveRecord
{
    public $table='register';
    /**
     * @desc 图片上传
     * @param $file
     * @return string
     */
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