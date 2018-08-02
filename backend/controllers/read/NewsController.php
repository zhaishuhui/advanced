<?php
/**
 * Created by PhpStorm.
 * User: 安好
 * Date: 2018/7/30
 * Time: 15:47
 */

namespace backend\controllers\read;


use backend\controllers\BaseController;
use backend\models\read\News;
use yii\web\Controller;

class NewsController extends BaseController
{
    public function actionIndex(){
        $list = News::getList();
        return $this->render('/read/news/list',['list'=>$list]);
    }
    public function actionAdd(){
        return $this->render('/read/news/add');
    }
    public function actionAddSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/news/add','error'=>'非法请求']);
        }
        $params=\Yii::$app->request->post();
        if (isset($params['_csrf-backend']));
        unset($params['_csrf-backend']);

        $params['addtime']=time();
//        var_dump($params);die;
        $film=new News();
//        var_dump($film);exit;
        foreach ($params as $key=>$value){
            $film->$key=$value;
        }
        if($film->save()){
            return $this->redirect(['/read/news/index']);
        }else{
            return $this->redirect(['/read/news/add']);
        }
    }
    public function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $list=news::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('/read/news/edit',['list'=>$list]);
    }
    public function actionEditSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/news/edit','error'=>'非法请求']);
        }

        $params=\Yii::$app->request->post();

        if(isset($params['_csrf-backend']));
        unset($params['_csrf-backend']);
        $film=News::findOne($params['id']);
//       var_dump($params);die;
        foreach ($params as $key=>$value){
            $film->$key=$value;
        }
//        var_dump($film);die;
        if($film->save()){
            return $this->redirect(['/read/news/index']);
        }else{
            return $this->redirect(['/read/news/edit']);
        }
    }
    public function actionDel(){
        $id=\Yii::$app->request->get('id');
        News::findOne($id)->delete();
        return $this->redirect(['/read/news/index']);
    }
}