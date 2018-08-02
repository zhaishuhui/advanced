<!DOCTYPE html>
<head>
    <title>QQ阅读</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link rel="stylesheet" href="/moban/css/bootstrap.min.css" >
    <link href="/moban/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/moban/css/style-responsive.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/moban/css/font.css" type="text/css"/>
    <link href="/moban/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/moban/css/morris.css" type="text/css"/>
    <link rel="stylesheet" href="/moban/css/monthly.css">
<body>
<div class="form-w3layouts">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    作者表修改页面
                </header>
                <div class="panel-body">
                    <form role="form" class="form-horizontal " action="<?=\yii\helpers\Url::to(['/read/author/do-edit'])?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$author['id']?>">
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">作者名字</label>
                            <div class="col-lg-6">
                                <input type="text" name="name" id="email2" class="form-control" value="<?=$author['name']?>">
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-lg-3 control-label">性别</label>
                            <div class="col-lg-6">
                                <input type="radio" name="sex" id="email2" value="男" <?php if ($author['sex']=='男'):?>checked<?php endif;?>>男
                                <br><br>
                                <input type="radio" name="sex" id="email2" value="女" <?php if ($author['sex']=='女'):?>checked<?php endif;?>>女
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">地区</label>
                            <div class="col-lg-6">
                                <input type="text" name="region" id="email2" class="form-control" value="<?=$author['region']?>">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">个人简介</label>
                            <div class="col-lg-6">
                                <input type="text" name="intor" id="email2" class="form-control" value="<?=$author['intor']?>">
                            </div>
                        </div><div class="form-group has-success">
                            <label class="col-lg-3 control-label">用户名</label>
                            <div class="col-lg-6">
                                <input type="text" name="user_name" id="email2" class="form-control" value="<?=$author['user_name']?>">
                            </div>
                        </div><div class="form-group has-success">
                            <label class="col-lg-3 control-label">账号</label>
                            <div class="col-lg-6">
                                <input type="text" name="account" id="email2" class="form-control" value="<?=$author['account']?>">
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-lg-3 control-label">头像</label>
                            <div class="col-lg-6">
                                <input type="file" name="photo" value="<?=$author['photo']?>">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">邮箱</label>
                            <div class="col-lg-6">
                                <input type="text" name="email" id="email2" class="form-control" value="<?=$author['email']?>">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">密码</label>
                            <div class="col-lg-6">
                                <input type="password" name="password" id="email2" class="form-control" value="<?=$author['password']?>">
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
