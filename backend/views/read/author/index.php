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
                <thead>
                <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>作者名字</th>
                    <th>性别</th>
                    <th>地区</th>
                    <th>个人简介</th>
                    <th>用户名</th>
                    <th>账号</th>
                    <th>头像</th>
                    <th>邮箱</th>
                    <th>登录密码</th>
                    <th>ADDTIME 添加时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $v):?>
                    <tr data-expanded="true">
                        <td><?=$v['id']?></td>
                        <td><?=$v['name']?></td>
                        <td><?=$v['sex']?></td>
                        <td><?=$v['region']?></td>
                        <td><?=$v['intor']?></td>
                        <td><?=$v['user_name']?></td>
                        <td><?=$v['account']?></td>
                        <td><img src="<?=$v['photo']?>" width="100px"></td>
                        <td><?=$v['email']?></td>
                        <td><?=$v['password']?></td>
                        <td><?=$v['addtime']?></td>
                        <td>
                            <a href="<?=\yii\helpers\Url::to(['/read/author/delete','id'=>$v['id']])?>">删除</a>
                            <a href="<?=\yii\helpers\Url::to(['/read/author/edit','id'=>$v['id']])?>">修改</a>
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