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
            章节列表
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
                <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>小说id</th>
                    <th>章节标题</th>
                    <th>内容</th>
                    <th>附件</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $v):?>
                    <tr data-expanded="true">
                        <td><?=$v['id']?></td>
                        <td><?=$v['novel_id']?></td>
                        <td><?=$v['chapter_title']?></td>
                        <td><?=$v['condent']?></td>
                        <td><?=$v['file']?></td>
                        <td><?=$v['addtime']?></td>
                        <td>
                            <a href="<?=\yii\helpers\Url::to(['/read/chapter/delete','id'=>$v['id']])?>">删除</a>
                            <a href="<?=\yii\helpers\Url::to(['/read/chapter/edit','id'=>$v['id']])?>">修改</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>