<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/28 0028
 * Time: 下午 3:46
 */

namespace backend\models\read;


use yii\db\ActiveRecord;

class Novel extends ActiveRecord
{
    public static function get(){
        $table=Novel::find()->asArray()->all();
        return $table;
    }
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
        return './'.$bashDir.'/'.$filename;
    }
    public static function getList(){
        return [
            'category'=>Category::find()->asArray()->all()
        ];
    }
}