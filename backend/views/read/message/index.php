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
<a href="<?= \yii\helpers\Url::to(['/read/message/add'])?>">添加</a>
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <th>id</th>
                    <th>account账号</th>
                    <th>photo照片</th>
                    <th>name姓名</th>
                    <th>message留言</th>
                    <th>addtime添加时间</th>
                    <th>reply回复 </th>
                    <th>操作</th>
                </tr>
                <?php foreach ($list as $v):?>
                    <tr>
                        <th><?=$v['id']?></th>
                        <th><?=$v['account']?></th>

                        <th><img src="<?=$v['photo']?>" alt="" width="100"></th>
                        <th><?=$v['name']?></th>
                        <th><?=$v['message']?></th>
                        <th><?=$v['addtime']?></th>
                        <th><?=$v['reply']?></th>
                        <th>
                            <a href="<?= \yii\helpers\Url::to(['message/edit','id'=>$v['id']])?>">操作</a>
                            <a href="<?= \yii\helpers\Url::to(['message/delete','id'=>$v['id']])?>">删除</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
