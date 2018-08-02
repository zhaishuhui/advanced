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
                    小说表修改页面
                </header>
                <div class="panel-body">
                    <form role="form" class="form-horizontal " action="<?=\yii\helpers\Url::to(['/read/news/edit-save'])?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>" />
                        <input type="hidden" name="id" value="<?=$list['id']?>">
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">标题</label>
                            <div class="col-lg-6">
                                <input type="text" id="f-name" class="form-control" name="title" value="<?=$list['title']?>">
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-lg-3 control-label">类别</label>
                            <div class="col-lg-6">
                                <input type="text" id="email2" class="form-control" name="category" value="<?=$list['category']?>">
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-lg-3 control-label">内容</label>
                            <div class="col-lg-6">
                                <input type="text" id="email2" class="form-control" name="condent" value="<?=$list['condent']?>">
                            </div>
                        </div>

                        <div class="form-group has-error">
                            <label class="col-lg-3 control-label">添加人</label>
                            <div class="col-lg-6">
                                <input type="text" id="email2" class="form-control" name="add_people" value="<?=$list['add_people']?>">
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
