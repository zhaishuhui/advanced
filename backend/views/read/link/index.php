<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            用户列表
        </div>
        <div>
            <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
<a href="<?= \yii\helpers\Url::to(['/read/link/add'])?>">添加按钮</a>
            <table cellpadding="10" cellspacing="0" border="1">
                <tr>
                    <th>id</th>
                    <th>site_name</th>
                    <th>url</th>
                    <th>addtime</th>
                    <th>操作</th>
                </tr>
                <?php foreach ($list as $v):?>
                    <tr>
                        <th><?=$v['id']?></th>
                        <th><?=$v['site_name']?></th>
                        <th><?=$v['url']?></th>
                        <th><?=$v['addtime']?></th>
                        <th>
                            <a href="<?= \yii\helpers\Url::to(['/read/link/edit','id'=>$v['id']])?>">操作</a>
                            <a href="<?= \yii\helpers\Url::to(['/read/link/delete','id'=>$v['id']])?>">删除</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>