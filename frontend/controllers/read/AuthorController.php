<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/8/1
 * Time: 16:07
 */

namespace frontend\controllers\read;


use frontend\models\read\Author;
use frontend\models\read\Register;
use yii\web\Controller;

class AuthorController extends Controller
{
    public $layout=false;
    public function init(){
        $this->enableCsrfValidation=false;
    }
    public function actionIndex()
    {
        return $this->render('/read/author/index');

    }
    public function actionRegis()
    {
        //echo 1111;die;
        //如果不是post获取就跳转到注册页面
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['read/author/index']);
        }
        //获取post提交过来的数据
        $data=\Yii::$app->request->post();

        $file=$_FILES['photo'];

        $data['photo']=Register::upload($file);
        //var_dump($data);die;
        $register=new Author();
        foreach ($data as $k=>$v){
            $register->$k=$v;
        }
        if($register->save()){
            return $this->redirect(['/index/index']);
        }else{
            return $this->redirect(['read/author/index']);
        }

    }
}