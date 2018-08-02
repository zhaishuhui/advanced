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
                    管理员表添加页面
                </header>
                <div class="panel-body">
                    <form role="form" class="form-horizontal " action="<?=\yii\helpers\Url::to(['/read/allusers/add-save'])?>" method="post" enctype="multipart/form-data">
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">用户名:</label>
                            <div class="col-lg-6">
                                <input type="text" name="user_name" id="email2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-lg-3 control-label">密码:</label>
                            <div class="col-lg-6">
                                <input type="password" name="password" id="email2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">管理员:</label>
                            <div class="col-lg-6">
                                <input type="text" name="administrator">
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-lg-3 control-label">头像</label>
                            <div class="col-lg-6">
                                <input type="file" name="photo">
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
