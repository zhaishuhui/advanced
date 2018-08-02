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
            小说表展示页面
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
                    <th>Title 标题</th>
                    <th>Category_id 分类</th>
                    <th>Condent 内容</th>
                    <th>File 附件</th>
                    <th>Recommend 推荐</th>
                    <th>Author 作者</th>
                    <th>Press 出版社</th>
                    <th data-breakpoints="xs">Image 图片</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Addtime 添加时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($list as $key => $v):?>
                    <tr data-expanded="true">
                        <td><?=$key+1?></td>
                        <td><?=$v['title']?></td>
                        <td><?=$v['category_id']?></td>
                        <td><?=$v['condent']?></td>
                        <td><?=$v['file']?></td>
                        <td><?=$v['recommend']?></td>
                        <td><?=$v['author']?></td>
                        <td><?=$v['press']?></td>
                        <td><img src="<?=$v['image']?>" alt="" width="100"></td>
                        <td><?=$v['addtime']?></td>
                        <td>
                            <a href="<?=\yii\helpers\Url::to(['/read/novel/edit','id'=>$v['id']])?>" class="active" ui-toggle-class="">
                                <i class="fa fa-check text-success text-active"></i>
                            </a>
                            <a href="<?=\yii\helpers\Url::to(['/read/novel/delete','id'=>$v['id']])?>" class="active" ui-toggle-class="">
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
