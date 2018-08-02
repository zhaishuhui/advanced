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
                    评论表添加页面
                </header>
                <div class="panel-body">
                    <form role="form" class="form-horizontal " action="<?=\yii\helpers\Url::to(['/read/comment/add-save'])?>" method="post" enctype="multipart/form-data">
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">小说id:</label>
                            <div class="col-lg-6">
                                <input type="text" name="novel_id" id="email2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-lg-3 control-label">评论:</label>
                            <div class="col-lg-6">
                                <textarea name="comment" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">评论人:</label>
                            <div class="col-lg-6">
                                <input type="text" name="comment_name" id="email2" class="form-control">
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
