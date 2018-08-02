<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26 0026
 * Time: 下午 3:49
 */

namespace backend\controllers\read;


use backend\controllers\BaseController;
use backend\models\read\Novel;
use yii\web\Controller;

class NovelController extends BaseController
{
    public function init()
    {
        $this->enableCsrfValidation=false;
    }


    public function actionIndex()
    {
        $model=Novel::get();
        return $this->render('/read/novel/index',['list'=>$model]);
    }

    public function actionAdd()
    {
        $model=Novel::getList();
        return $this->render('/read/novel/add',$model);
    }
    public function actionAddSave(){
        if (!\Yii::$app->request->isPost){
            return $this->redirect(['/read/novel/add']);
        }
        $model=\Yii::$app->request->post();
        $files=$_FILES['image'];
        $model['image']=Novel::upload($files);

        $add=new Novel();
        foreach ($model as $k=>$v){
            $add->$k=$v;
        }
        $add->save();
        return $this->redirect(['/read/novel/index']);
    }
    public function actionDelete(){
        $id=\Yii::$app->request->get('id');
        Novel::findOne($id)->delete();
        return $this->redirect(['/read/novel/index']);
    }

    public function actionEdit()
    {
        //获取要编辑的id
        $id =\Yii::$app->request->get('id');
        //定义一个空数组接收数据
        $data = [];
        //获取公共方法
        $data=Novel::getList();
        //将数据付给变量
        $data['data']=Novel::find()->where($id)->asArray()->one();
        return $this->render('/read/novel/edit',$data);

    }

    public function actionEditSave()
    {
        if (!\Yii::$app->request->isPost){
            return $this->redirect(['/read/novel/edit']);
        }
        $model=\Yii::$app->request->post();
        $files=$_FILES['image'];
        $model['image']=Novel::upload($files);
        $id=$model['id'];
        unset($model['id']);
        $edit=Novel::findOne($id);
        foreach ($model as $k=>$v){
            $edit->$k=$v;
        }
        $edit->save();
        return $this->redirect(['/read/novel/index']);
    }
}