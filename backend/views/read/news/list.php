<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            XX列表
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
                    <th>标题</th>
                    <th>类别</th>
                    <th >内容</th>
                    <th>添加人</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Date of Birth</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($list as $v):?>
                    <tr data-expanded="true">
                        <td><?=$v['id']?></td>
                        <td><?=$v['title']    ?></td>
                        <td><?=$v['category']?></td>
                        <td><?=$v['condent']?></td>
                        <td><?=$v['add_people']?></td>
                        <td><?=$v['addtime']?></td>
                        <td>
                            <a href="<?=\yii\helpers\Url::to(['/read/news/del','id'=>$v['id']])?>">删除</a>
                            <a href="<?=\yii\helpers\Url::to(['read/news/edit','id'=>$v['id']])?>">修改</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                <a href="<?=\yii\helpers\Url::to(['/read/news/add'])?>">添加</a>
                </tbody>
            </table>
        </div>
    </div>
</div>
