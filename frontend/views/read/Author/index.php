
<head>
    <title>用户注册</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="/moban/js/jquery2.0.3.min.js"></script>
    <style>
        body{
            margin: 0;
            width: 100%;
        }
        .left{
            width: 30em;
            height: 49.5em;
            float: left;
        }
        .right{
            float: left;
            width: 60em;
        }
        table,tr,td,th{
            padding: 0.4em;
            color: crimson;
            text-align: center;
        }
        input{
            width: 30em;
            height: 3em;
            line-height: 3em;
            border-radius: 5px;
            border-color: #f7ecb5;
        }
        table{
            margin-left: 17em;
        }
        th{
            text-align: left;
        }
        .p1{
            font-size: 2.8em;
            margin-left: 6.3em;
            margin-top: 0.4em;
            margin-bottom: 0.1em;
        }
        .p2{
            font-size: 1.3em;
            margin-left: 13.7em;
            margin-bottom: 0.4em;
        }
        .p3{
            width: 21.5em;
            margin-left: 12.7em;
            border: 1px solid deepskyblue;
            background-color: deepskyblue;
            color: snow;
            font-size: 1.4em;
        }
        .check{
            color: #868686;
            font-size: 0.9em;
        }
        #check{
            width: 1.1em ;
            height: 1.1em;
            color: deepskyblue;
            margin-left: 21.7em;
            float: left;
        }
    </style>
</head>
<body>
<img src="upload/1.png" alt="" class="left">
<div class="right">
    <div class="p1">欢迎作者注册</div>
    <div class="p2">每一天，乐在沟通。</div>
    <form action="<?=\yii\helpers\Url::to(['/read/author/regis'])?>" method="post" enctype="multipart/form-data">
        <table>
            <tr><th>账 号</th><td><input type="text" name="account" required=""></td></tr>
            <tr><th>用 户 名</th><td><input type="text" name="name" placeholder="NAME" required=""></td></tr>
            <tr><th>真实姓名</th><td><input type="text" name="user_name" placeholder="NAME" required=""></td></tr>
            <tr><th>性 别</th><td><input type="text" name="sex" required=""></td></tr>
            <tr><th>地 区</th><td><input type="text" name="region" required=""></td></tr>
            <tr><th>头 像</th><td><input type="file" name="photo" required=""></td></tr>
            <tr><th>个人简介</th><td><input type="text" name="intor" required=""></td></tr>
            <tr><th>邮 箱</th><td><input type="email" name="email" placeholder="E-MAIL" required=""></td></tr>
            <tr><th>密 码</th><td><input type="password" name="password" placeholder="PASSWORD" required=""></td></tr>
            <tr><th>确认密码</th><td><input type="password" name="password" placeholder="PASSWORD" required=""></td></tr>
        </table>
        <input type="submit" value="用户注册"  class="p3">
        <p><input type="checkbox" id="check" checked> <span class="check">我已阅读并同意相关条款和服务政策</span></p>
    </form>
</div>
<script src="/moban/js/bootstrap.js"></script>
<script src="/moban/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="/moban/js/scripts.js"></script>
<script src="/moban/js/jquery.slimscroll.js"></script>
<script src="/moban/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/backend/web/moban/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="/moban/js/jquery.scrollTo.js"></script>
</body>

