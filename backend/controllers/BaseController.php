<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/7/31
 * Time: 15:17
 */

namespace backend\controllers;


use yii\web\Controller;

class BaseController extends Controller
{

    /**
     * @desc 获取session的值并解码
     * @return mixed
     */
    public static function getSession(){
        //获取session['user_infor']的值
        $session = \Yii::$app->session->get('user_infor');
        //将￥session解码
        if(!empty($session)){
            $session = json_decode($session,true);
        }
        return $session;
    }

    /**@desc  判断session中是否存在之前的值否则不能进入后台任何页面
     * @param \yii\base\Action $action
     * @return bool|\yii\web\Response
     */
    public function beforeAction($action){
       $session = self::getSession();
       if(empty($session)){
           return $this->redirect(['backlogin/login/login-add']);
       }
       else{
           return true;
       }
    }

    /**
     * @desc 文件上传
     * @param $file
     * @return string
     */
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