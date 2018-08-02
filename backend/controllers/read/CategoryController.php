<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/31 0031
 * Time: 上午 7:04
 */

namespace backend\controllers\read;


use
    backend\controllers\BaseController;
use backend\models\read\Category;
use yii\web\Controller;

class CategoryController extends BaseController
{
    public function init()
    {
        $this->enableCsrfValidation=false;
    }

    /**
     * @desc 分类展示页面
     * @return string
     */
    public function actionIndex()
    {
        $model=Category::get();
        return $this->render('/read/category/index',['list'=>$model]);
    }

    /**
     * @desc 添加页面
     * @return string
     */
    public function actionAdd()
    {
        return $this->render('/read/category/add');
    }
    public function actionAddSave(){
        if (!\Yii::$app->request->isPost){
            return $this->redirect(['/read/category/add']);
        }
        $model=\Yii::$app->request->post();
        $add=new Category();
        foreach ($model as $k=>$v){
            $add->$k=$v;
        }
        $add->save();
        return $this->redirect(['/read/category/index']);
    }
    public function actionDelete(){
        $id=\Yii::$app->request->get('id');
        Category::findOne($id)->delete();
        return $this->redirect(['/read/category/index']);
    }

    public function actionEdit()
    {
        $id=\Yii::$app->request->get('id');
        $data=Category::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('/read/category/edit',['data'=>$data]);
    }

    public function actionEditSave()
    {
        if (!\Yii::$app->request->isPost){
            return $this->redirect(['/read/category/edit']);
        }
        $model=\Yii::$app->request->post();
        $id=$model['id'];
        unset($model['id']);
        $edit=Category::findOne($id);
        foreach ($model as $k=>$v){
            $edit->$k=$v;
        }
        $edit->save();
        return $this->redirect(['/read/category/index']);
    }
}