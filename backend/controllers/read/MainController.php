<?php
/**
 * Created by PhpStorm.
 * User: abc
 * Date: 2018/7/31
 * Time: 16:25
 */

namespace backend\controllers\read;


use backend\controllers\BaseController;

class MainController extends BaseController
{

    /**首页
     * @return string
     */
    public function actionMain()
    {
        return $this->render('/read/main/main');
    }

    /**
     *管理员个人信息
     */
    public function actionDetalis(){
        return $this->render('/read/main/detalis');
    }
}