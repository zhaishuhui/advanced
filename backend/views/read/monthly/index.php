<!DOCTYPE html>
<head>
    <title>QQ阅读</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
<body>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            月票表展示页面
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
                    <th>小说ID</th>
                    <th>月票数量</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Addtime 添加时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($list as $key => $v):?>
                    <tr data-expanded="true">
                        <td><?=$v['id']?></td>
                        <td><?=$v['novel_id']?></td>
                        <td><?=$v['number']?></td>
                        <td><?=$v['addtime']?></td>
                        <td>
                            <a href="<?=\yii\helpers\Url::to(['/read/monthly/edit','id'=>$v['id']])?>" class="active" ui-toggle-class="">
                                <i class="fa fa-check text-success text-active"></i>
                            </a>
                            <a href="<?=\yii\helpers\Url::to(['/read/monthly/delete','id'=>$v['id']])?>" class="active" ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
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
