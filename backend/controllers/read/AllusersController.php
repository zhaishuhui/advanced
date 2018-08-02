<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/27 0027
 * Time: 下午 8:08
 */

namespace backend\controllers\read;

use backend\controllers\BaseController;
use backend\models\read\Allusers;
use yii\web\Controller;

class AllusersController extends BaseController
{
    public $layout='main';
    public function init(){
        $this->enableCsrfValidation=false;
    }
    //展示
    public function actionIndex(){

        $allusers=Allusers::getList();
        //var_dump($allusers);die;
        return $this->render('/read/allusers/index',['list'=>$allusers]);
    }

//添加
    public function actionAdd(){
        return $this->render('/read/allusers/add');
    }
    public function actionAddSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['add']);
        }        $params=\Yii::$app->request->post();
        //网页验证码_csrf
             if(isset($params['_csrf']))
             unset($params['_csrf']);

          //上传图片
        $file=$_FILES['photo'];
        $params['photo']=Allusers::upload($file);

         $allusers=new Allusers();
         foreach ($params as $key=>$value){
        $allusers->$key=$value;        }
        if($allusers->save()){
        return $this->redirect(['/read/allusers/index']);
    }else{
            return $this->goBack();
        }
}

    /**
     * @desc 删除
     * @return \yii\web\Response
     */
    public function actionDelete()
    {
        $id = \Yii::$app->request->get('id');
        Allusers::findOne($id)->delete();
        return $this->redirect(['/read/allusers/index']);
    }
//修改
    public function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $assign=Allusers::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('/read/allusers/edit',['allusers'=>$assign]);
    }
      public function actionDoEdit(){

        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/allusers/edit']);
        }
        $params=\Yii::$app->request->post();
         //图片上传
          $file=$_FILES['photo'];
          $params['photo']=Allusers::upload($file);
        $id=$params['id'];
        unset($params['id']);
        $allusers=Allusers::findOne($id);
        foreach ($params as $key=>$value){
            $allusers->$key=$value;
        }
        if($allusers->save()){
                return $this->redirect(['/read/allusers/index']);
            }else{
                return $this->goBack();
            }
      }

}