<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1 0001
 * Time: 下午 3:58
 */

namespace backend\controllers\read;


use backend\models\read\Monthly;
use yii\web\Controller;

class MonthlyController extends Controller
{
    public function init(){
        $this->enableCsrfValidation=false;
    }
    //展示
    public function actionIndex(){

        $monthly=Monthly::getList();
        return $this->render('/read/monthly/index',['list'=>$monthly]);
    }

//添加
    public function actionAdd(){
        return $this->render('/read/monthly/add');
    }
    public function actionAddSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['add']);
        }        $params=\Yii::$app->request->post();
        //网页验证码_csrf
        if(isset($params['_csrf']))
            unset($params['_csrf']);

        $monthly=new Monthly();
        foreach ($params as $key=>$value){
            $monthly->$key=$value;        }
        if($monthly->save()){
            return $this->redirect(['/read/monthly/index']);
        }else{
            return $this->goBack();
        }
    }
//删除
    public function actionDelete()
    {
        $id = \Yii::$app->request->get('id');
        Monthly::findOne($id)->delete();
        return $this->redirect(['/read/monthly/index']);
    }
//修改
    public function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $assign=Monthly::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('/read/monthly/edit',['monthly'=>$assign]);
    }
    public function actionDoEdit(){

        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/monthly/edit']);
        }
        $params=\Yii::$app->request->post();
        $id=$params['id'];
        unset($params['id']);
        $monthly=Monthly::findOne($id);
        foreach ($params as $key=>$value){
            $monthly->$key=$value;
        }
        if($monthly->save()){
            return $this->redirect(['/read/monthly/index']);
        }else{
            return $this->goBack();
        }
    }


}