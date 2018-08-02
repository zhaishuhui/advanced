<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/30 0030
 * Time: 下午 4:07
 */

namespace backend\controllers\read;


use backend\controllers\BaseController;
use backend\models\read\Comment;
use yii\web\Controller;

class CommentController extends BaseController
{
    public $layout='main';

    public function init(){
        $this->enableCsrfValidation=false;
    }
    //展示
    public function actionIndex(){

        $comment=Comment::getList();
        return $this->render('/read/comment/index',['list'=>$comment]);
    }

//添加
    public function actionAdd(){
        return $this->render('/read/comment/add');
    }
    public function actionAddSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/comment/add']);
        }
        $params=\Yii::$app->request->post();

        $comment=new Comment();
        foreach ($params as $key=>$value){
            $comment->$key=$value;        }
        if($comment->save()){
            return $this->redirect(['/read/comment/index']);
        }else{
            return $this->goBack();
        }
    }
//删除
    public function actionDelete()
    {
        $id = \Yii::$app->request->get('id');
        Comment::findOne($id)->delete();
        return $this->redirect(['/read/comment/index']);
    }
//修改
    public function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $assign=Comment::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('/read/comment/edit',['comment'=>$assign]);
    }
    public function actionDoEdit(){

        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/comment/edit']);
        }
        $params=\Yii::$app->request->post();
        $id=$params['id'];
        unset($params['id']);
        $comment=Comment::findOne($id);
        foreach ($params as $key=>$value){
            $comment->$key=$value;
        }
        if($comment->save()){
            return $this->redirect(['/read/comment/index']);
        }else{
            return $this->goBack();
        }
    }
}