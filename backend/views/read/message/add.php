<!doctype html>
<html lang="en">
<head>
    <title>QQ阅读</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
</head>
<body>
<div class="form-w3layouts">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    管理员表添加页面
                </header>
                <div class="panel-body">
                    <form action="<?= \yii\helpers\Url::to(['/read/message/add-save'])?>" class="form-horizontal " method="post" enctype="multipart/form-data">
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">account账号:</label>
                            <div class="col-lg-6">
                                <input type="text" name="account">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">photo照片:</label>
                            <div class="col-lg-6">
                                <input type="file" name="photo">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">name姓名:</label>
                            <div class="col-lg-6">
                                <input type="text" name="name">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">message留言:</label>
                            <div class="col-lg-6">
                                <input type="text" name="message">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">reply回复:</label>
                            <div class="col-lg-6">
                                <input type="text" name="reply">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <input type="submit" >
                            </div>
                        </div>

                    </form>
                </div>
            </section>
        </div>
    </div>
</body>
</html>