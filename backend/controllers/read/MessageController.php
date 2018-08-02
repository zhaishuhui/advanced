<?php
/**
 * Created by PhpStorm.
 * User: lixiuyu
 * Date: 2018/7/30
 * Time: 15:55
 */

namespace backend\controllers\read;



use backend\controllers\BaseController;
use backend\models\read\Message;
use yii\web\Controller;

class MessageController extends BaseController
{
    public $layout='main';
    public function init(){
        $this->enableCsrfValidation=false;
    }
    public function actionIndex(){
        return $this->render('/read/message/index',
            ['list'=>Message::find()->asArray()->all()
        ]);
    }
    public function actionAdd(){
        return $this->render('add');
    }
    public function actionAddSave(){
        if (!\Yii::$app->request->isPost) {
            return $this->redirect(['/read/message/add', 'error' => '非法请求']);
        }
        $asd = \Yii::$app->request->post();

        $film=$_FILES['photo'];
        $asd['photo']=Message::upload($film);

        $film = new Message();
        foreach ($asd as $k => $v) {
            $film->$k = $v;
        }
        $film->save();
        return $this->redirect(['read/message/index']);
    }
    public function actionDelete()
    {
        $id = \Yii::$app->request->get('id');
        Message::findOne($id)->delete();
        return $this->redirect(['read/message/index']);
    }
    public function actionEdit(){
        $id=\Yii::$app->request->get('id');
        $asd=Message::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('edit',['film'=>$asd]);
    }
    public function actionEditSave(){
        if(!\Yii::$app->request->isPost){
            return $this->redirect(['read/message/edit']);
        }
        $data=\Yii::$app->request->post();

        $film=$_FILES['photo'];
        $asd['photo']=Message::upload($film);

        $id=$data['id'];
        unset($data['id']);
        $asd=Message::findOne($id);
        foreach ($data as $k=>$v){
            $asd->$k=$v;
        }
        $asd->save();
        return $this->redirect(['read/message/index']);
    }
}