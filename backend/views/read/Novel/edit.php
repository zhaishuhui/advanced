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
                    <form role="form" class="form-horizontal " action="<?=\yii\helpers\Url::to(['/read/novel/edit-save'])?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$data['id']?>">
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">标题</label>
                            <div class="col-lg-6">
                                <input type="text" id="f-name" class="form-control" name="title" value="<?=$data['title']?>">
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-lg-3 control-label">分类</label>
                            <div class="col-lg-6">
                                <select name="category_id" id="l-name" class="form-control">

                                    <?php foreach ($category as $v): ?>
                                        <?php if ($v['id']==$data['category_id']): ?>
                                        <option value="<?= $v['id'] ?>" selected><?= $v['category'] ?></option>
                                        <?php else: ?>
                                        <option value="<?= $v['id'] ?>" ><?= $v['category'] ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-lg-3 control-label">内容</label>
                            <div class="col-lg-6">
                                <input type="text" id="email2" class="form-control" name="condent" value="<?=$data['condent']?>">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">附件</label>
                            <div class="col-lg-6">
                                <input type="text" name="file"  class="form-control">
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-lg-3 control-label">推荐</label>
                            <div class="col-lg-6">
                                <input type="text" id="email2" class="form-control" name="recommend" value="<?=$data['recommend']?>">
                            </div>
                        </div>
                        <div class="form-group has-warning">
                            <label class="col-lg-3 control-label">作者</label>
                            <div class="col-lg-6">
                                <input type="text" id="email2" class="form-control" name="author" value="<?=$data['author']?>">
                            </div>
                        </div>
                        <div class="form-group has-success">
                            <label class="col-lg-3 control-label">出版社</label>
                            <div class="col-lg-6">
                                <input type="text" id="email2" class="form-control" name="press" value="<?=$data['press']?>">
                            </div>
                        </div>
                        <div class="form-group has-error">
                            <label class="col-lg-3 control-label">图片</label>
                            <div class="col-lg-6">
                                <input type="file" name="image">
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
