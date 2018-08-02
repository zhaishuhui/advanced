<?php
/**
 * Created by PhpStorm.
 * User: 28267
 * Date: 2018/7/28
 * Time: 14:45
 */

namespace backend\controllers\backlogin;


use backend\models\Allusers;
use yii\web\Controller;

class LoginController extends Controller
{
    public  $layout ='login';
    public function init(){
        $this->enableCsrfValidation=false;
    }

    /**
     * @return \yii\web\Response
     */
    public function actionOutSession(){
        //获取session的值
        $session = \Yii::$app->session->remove('user_infor');

        return $this->redirect(['backlogin/login/login-add']);
    }
    /*
     * 登录界面
     * */
    public function actionLoginAdd(){
        return $this->render('/login/login');
    }
    /*
     * 登录
     * */
    public function actionLogin()
    {
        //判断是否为Post获取
        if (!\Yii::$app->request->isPost) {
            return $this->redirect(['backlogin/login/login-add']);
        }
        //获取表单的值
        $data = \Yii::$app->request->post();
//        var_dump($data);die;
        //删除_csrf-frontend 因为数据库表单中没有该字段
        if (isset($data['_csrf-frontend'])) {
            unset($data['_csrf-frontend']);
        }
    //根据表单中获取的用户名在数据库的该表中来找到与之匹配的数据
        $alluser = Allusers::find()->where(array('user_name' => $data['user_name']))->asArray()->one();
        //判断找到的数据是否为空为空则返回登录界面
        if(empty($alluser)){
            return $this->redirect(['backlogin/login/login-add']);
        }
      // var_dump($alluser['password']);
//        var_dump($data['password']);die;
        //判断找到的数据中的密码字段 的值 与表单中的密码是否匹配 否则返回登录界面
        if($alluser['password'] != $data['password']){
            return $this->redirect(['backlogin/login/login-add']);
        }
//       var_dump(json_encode($alluser));die;
        //将找到数据存在session中
        $alluser['logintime']= empty($alluser['logintime'])?'第一次登录':date('Y-m-d H:i:s',time());
        \Yii::$app->session->set('user_infor',json_encode($alluser) );
        return $this->redirect(['read/main/main']);
    }

//    /*
//     * 获取session的值并解码
//     * */
//    public function getSession(){
//        //获取session['user_infor']的值
//       $session = \Yii::$app->session->get('user_infor');
//      //将￥session解码
//       if(!empty($session)){
//           $session = json_decode($session);
//       }
//       return $session;
//    }
//    /*
//     * 判断session中是否存在之前的值否则不能进入后台任何页面
//     * */
////    public function beforeAction($action){
////       $session = self::getSession();
////       if(empty($session)){
////           return $this->redirect(['backlogin/login/login-add']);
////       }
////    }

}