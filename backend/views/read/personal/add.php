<!DOCTYPE html>
<head>
    <title>QQ阅读</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
<body>
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            小说表添加页面
                        </header>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal " action="<?=\yii\helpers\Url::to(['/read/personal/add-save'])?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>" />
                                <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">用户</label>
                                    <div class="col-lg-6">
                                        <input type="text" id="f-name" class="form-control" name="user_name">
                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">小说编号</label>
                                    <div class="col-lg-6">
                                        <input type="text" id="email2" class="form-control" name="novel_id">
                                    </div>
                                </div>
                                <div class="form-group has-warning">
                                    <label class="col-lg-3 control-label">小说名字</label>
                                    <div class="col-lg-6">
                                        <input type="text" id="email2" class="form-control" name="novel_title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
</body>
</html>
