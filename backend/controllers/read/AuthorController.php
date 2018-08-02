<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/1 0001
 * Time: 下午 4:23
 */

namespace backend\controllers\read;


use backend\models\read\Author;
use yii\web\Controller;

class AuthorController extends Controller
{
    public function init(){
        $this->enableCsrfValidation=false;
    }
    //展示
    public function actionIndex(){
        $author=Author::getList();
        return $this->render('/read/author/index',['list'=>$author]);
    }

//添加
    public function actionAdd(){
        return $this->render('/read/author/add');
    }
    public function actionAddSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['add']);
        }
        $params=\Yii::$app->request->post();
        //网页验证码_csrf
        if(isset($params['_csrf']))
            unset($params['_csrf']);

        //上传图片
        $file=$_FILES['photo'];
        $params['photo']=Author::upload($file);

        $author=new Author();
        foreach ($params as $key=>$value){
            $author->$key=$value;        }
        if($author->save()){
            return $this->redirect(['/read/author/index']);
        }else{
            return $this->goBack();
        }
    }
//删除
    public function actionDelete()
    {
        $id = \Yii::$app->request->get('id');
        Author::findOne($id)->delete();
        return $this->redirect(['/read/author/index']);
    }
//修改
    public function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $assign=Author::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('/read/author/edit',['author'=>$assign]);
    }
    public function actionDoEdit(){

        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/author/edit']);
        }
        $params=\Yii::$app->request->post();
        //图片上传
        $file=$_FILES['photo'];
        $params['photo']=Author::upload($file);
        $id=$params['id'];
        unset($params['id']);
        $author=Author::findOne($id);
        foreach ($params as $key=>$value){
            $author->$key=$value;
        }
        if($author->save()){
            return $this->redirect(['/read/author/index']);
        }else{
            return $this->goBack();
        }
    }

}