<?php
/**
 * Created by PhpStorm.
 * User: 翟书辉
 * Date: 2018/7/27
 * Time: 19:59
 */

namespace frontend\controllers\read;


use backend\models\read\Register;
use yii\web\Controller;

class RegisterController extends Controller
{
    public $layout=false;

    public function init(){
        $this->enableCsrfValidation=false;
    }

    /**
     * @desc 注册页面
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('/read/register/index');
    }

    /**
     * @desc 执行注册
     * @return \yii\web\Response
     */
    public function actionRegis()
    {
        //如果不是post获取就跳转到注册页面
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['read/register/index']);
        }
        //获取post提交过来的数据
        $data=\Yii::$app->request->post();

        $file=$_FILES['photo'];

        $data['photo']=\frontend\models\read\Register::upload($file);
        //var_dump($data);die;
        $register=new \frontend\models\read\Register();
        foreach ($data as $k=>$v){
            $register->$k=$v;
        }
       if($register->save()){
           return $this->redirect(['/index/index']);
       }else{
           return $this->redirect(['read/register/index']);
       }


    }
}