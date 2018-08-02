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
                    <th>用户</th>
                    <th>小说编号</th>
                    <th >小说名字</th>
                    <th>添加时间</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">Date of Birth</th>
                </tr>
                </thead>
                <tbody>

                <?php foreach ($list as $v):?>
                    <tr data-expanded="true">
                        <td><?=$v['id']?></td>
                        <td><?=$v['user_name']?></td>
                        <td><?=$v['novel_id']?></td>
                        <td><?=$v['novel_title']?></td>
                        <td><?=$v['addtime']?></td>
                        <td>
                            <a href="<?=\yii\helpers\Url::to(['/read/personal/del','id'=>$v['id']])?>">删除</a>
                            <a href="<?=\yii\helpers\Url::to(['/read/personal/edit','id'=>$v['id']])?>">修改</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                <a href="<?=\yii\helpers\Url::to(['read/personal/add'])?>">添加</a>
                </tbody>
            </table>
        </div>
    </div>
</div>
