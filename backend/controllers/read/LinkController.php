<?php
/**
 * Created by PhpStorm.
 * User: lixiuyu
 * Date: 2018/7/28
 * Time: 17:40
 */

namespace backend\controllers\read;



use backend\controllers\BaseController;
use backend\models\read\Link;
use yii\web\Controller;

class LinkController extends BaseController
{

    /**
     * 展示页面
     */
    public $layout='main';
    public function init()
    {
       $this->enableCsrfValidation=false;
    }

    public function actionIndex(){
        return $this->render('/read/link/index',
            [
                'list'=>Link::find()->asArray()->all()
            ]);
    }
    /**
     * 添加内容
     */
    public function actionAdd(){
        return $this->render('/read/link/add');
    }

    /**
     * 添加保存
     * @return \yii\web\Response
     */
    public function actionAddSave(){
        if (!\Yii::$app->request->isPost) {
            return $this->redirect(['/read/link/add', 'error' => '非法请求']);
        }
        $list = \Yii::$app->request->post();
        $film = new Link();
        foreach ($list as $k => $v) {
            $film->$k = $v;
        }
        $film->save();
        return $this->redirect(['/read/link/index']);
    }
    /*
     * 删除单挑数据
     */
    public function actionDelete()
    {
        $id = \Yii::$app->request->get('id');
        Link::findOne($id)->delete();
        return $this->redirect(['/read/link/index']);
    }

    /**
     * 修改
     * @return string
     */
    public function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $asd=Link::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('/read/link/edit',['list'=>$asd]);
    }

    /**
     * 修改保存
     * @return \yii\web\Response
     */
    public function actionEditSave(){

        if(!\Yii::$app->request->isPost){
            return $this->redirect(['/read/link/edit']);
        }
        //获取POST数据给变量$data;
        $data=\Yii::$app->request->post();
        //$data里的id;
        $id=$data['id'];
        //删除$data的id;
        unset($data['id']);
        //查询link表里的单条数据（包括id）；
        $link=Link::findOne($id);
        foreach ($data as $key=>$value){
            $link->$key=$value;
        }
        if($link->save()){
            return $this->redirect(['/read/link/index']);
        }else{
            return $this->goBack();
        }
    }


}