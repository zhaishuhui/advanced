<?php
$userinfor = \backend\controllers\BaseController::getSession();

?>
<section class="panel">
    <header class="panel-heading">
       管理员个人信息
    </header>
    <div class="panel-body">
        <form role="form" class="form-horizontal " action="<?=\yii\helpers\Url::to(['read/news/add-save'])?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>" />
            <div class="form-group has-success">
                <label class="col-lg-3 control-label">姓名</label>
                <div class="col-lg-6">
                    <input type="text" id="email2" class="form-control" name="category" value="<?= $userinfor['user_name'] ?>">
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-lg-3 control-label">密码</label>
                <div class="col-lg-6">
                    <input type="password" id="email2" class="form-control" name="category" value="<?= $userinfor['password'] ?>">
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-lg-3 control-label">照片</label>
                <div class="col-lg-6">
                    <img src="<?= $userinfor['photo'] ?>" alt="" width="130" height="80">
                </div>
            </div>
            <div class="form-group has-warning">
                <label class="col-lg-3 control-label">上次登录时间</label>
                <div class="col-lg-6">
                    <input type="text" id="email2" class="form-control" name="category" value="<?= $userinfor['addtime'] ?>">
                </div>
            </div>
        </form>
    </div>
</section>



