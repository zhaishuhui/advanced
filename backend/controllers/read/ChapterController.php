<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/30 0030
 * Time: 下午 3:14
 */

namespace backend\controllers\read;


use backend\controllers\BaseController;
use backend\models\read\Chapter;
use yii\web\Controller;

class ChapterController extends BaseController
{
    public $layout='main';

    public function init(){
        $this->enableCsrfValidation=false;
    }
    //展示
    public function actionIndex(){

        $chapter=Chapter::getList();
        return $this->render('/read/chapter/index',['list'=>$chapter]);
    }

//添加
    public function actionAdd(){
        return $this->render('/read/chapter/add');
    }
    public function actionAddSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/chapter/add']);
        }
        $params=\Yii::$app->request->post();

        $chapter=new Chapter();
        foreach ($params as $key=>$value){
            $chapter->$key=$value;        }
        if($chapter->save()){
            return $this->redirect(['/read/chapter/index']);
        }else{
            return $this->goBack();
        }
    }
//删除
    public function actionDelete()
    {
        $id = \Yii::$app->request->get('id');
        Chapter::findOne($id)->delete();
        return $this->redirect(['/read/chapter/index']);
    }
//修改
    public function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $assign=Chapter::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('/read/chapter/edit',['chapter'=>$assign]);
    }
    public function actionDoEdit(){

        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/chapter/edit']);
        }
        $params=\Yii::$app->request->post();
        $id=$params['id'];
        unset($params['id']);
        $chapter=Chapter::findOne($id);
        foreach ($params as $key=>$value){
            $chapter->$key=$value;
        }
        if($chapter->save()){
            return $this->redirect(['/read/chapter/index']);
        }else{
            return $this->goBack();
        }
    }
}