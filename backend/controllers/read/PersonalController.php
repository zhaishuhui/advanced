<?php
/**
 * Created by PhpStorm.
 * User: 安好
 * Date: 2018/7/28
 * Time: 15:00
 */

namespace backend\controllers\read;



use backend\controllers\BaseController;
use backend\Models\read\Personal;
use yii\web\Controller;

class PersonalController extends BaseController
{
    /**
     * @desc 个人信息表展示页面
     * @return string
     */
    public function actionIndex(){
       $list = Personal::getList();
        return $this->render('/read/personal/list',['list'=>$list]);
    }

    /**
     * @desc 添加页面
     * @return string
     */
    public function actionAdd(){
        return $this->render('/read/personal/add');
    }

    /**
     * @desc 执行添加
     * @return \yii\web\Response
     */
    public function actionAddSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/personal/add','error'=>'非法请求']);
        }
        $params=\Yii::$app->request->post();
        if (isset($params['_csrf-backend']));
            unset($params['_csrf-backend']);
        $film=new Personal();
//        var_dump($film);exit;
        foreach ($params as $key=>$value){
            $film->$key=$value;
        }
        if($film->save()){
            return $this->redirect(['/read/personal/index']);
        }else{
            return $this->redirect(['/read/personal/add']);
        }
    }

    /**@desc 修改页面
     * @return string
     */
    public function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $list=Personal::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('/read/personal/edit',['list'=>$list]);
    }

    /**
     * @desc 执行修改
     * @return \yii\web\Response
     */
    public function actionEditSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/personal/edit','error'=>'非法请求']);
        }
        $params=\Yii::$app->request->post();

        if(isset($params['_csrf-backend']));
        unset($params['_csrf-backend']);
        $film=Personal::findOne($params['id']);
        foreach ($params as $key=>$value){
            $film->$key=$value;
        }
        if($film->save()){
            return $this->redirect(['/read/personal/index']);
        }else{
            return $this->redirect(['/read/personal/edit']);
        }
    }

    /**
     * @desc 删除
     * @return \yii\web\Response
     */
    public function actionDel(){
        $id=\Yii::$app->request->get('id');
        Personal::findOne($id)->delete();
        return $this->redirect(['/read/personal/index']);
    }
}