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
                    <form action="<?= \yii\helpers\Url::to(['/read/link/edit-save'])?>" class="form-horizontal " method="post">
                        <input type="hidden" name="id" value="<?=$list['id']?>"><br>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">网站名称:</label>
                            <div class="col-lg-6">
                                <input type="text" name="site_name" value="<?=$list['site_name']?>">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">网址:</label>
                            <div class="col-lg-6">
                                <input type="text" name="url"  value="<?=$list['url']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <input type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>
</body>
</html>