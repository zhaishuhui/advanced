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
                    章节表修改页面
                </header>
                <div class="panel-body">
                    <form role="form" class="form-horizontal " action="<?=\yii\helpers\Url::to(['/read/chapter/do-edit'])?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$chapter['id']?>">
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">小说id:</label>
                            <div class="col-lg-6">
                                <input type="text" name="novel_id" id="email2" class="form-control" value="<?=$chapter['novel_id']?>">
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-lg-3 control-label">章节标题:</label>
                            <div class="col-lg-6">
                                <input type="text" name="chapter_title" id="email2" class="form-control" value="<?=$chapter['chapter_title']?>">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">内容:</label>
                            <div class="col-lg-6">
                                <textarea name="condent" id="" cols="30" rows="10"value="<?=$chapter['condent']?>"></textarea>
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-lg-3 control-label">附件</label>
                            <div class="col-lg-6">
                                <input type="file" name="file" value="<?=$chapter['file']?>">
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
