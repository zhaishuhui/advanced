<?php
$userinfor = \backend\controllers\BaseController::getSession();
?>
<!DOCTYPE html>
<head>
    <title>QQ阅读</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="/moban/css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="/moban/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/moban/css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="/moban/css/font.css" type="text/css"/>
    <link href="/moban/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="/moban/css/morris.css" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="/moban/css/monthly.css">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="/moban/js/jquery2.0.3.min.js"></script>
    <script src="/moban/js/raphael-min.js"></script>
    <script src="/moban/js/morris.js"></script>
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="#" class="logo">
                后台管理
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge bg-success"></span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p class="">待定任务</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>更新作者信息</h5>
                                        <p>Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>管理新闻内容</h5>
                                        <p>Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>网站公告</h5>
                                        <p>Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info clearfix">
                                    <div class="desc pull-left">
                                        <h5>站内新闻</h5>
                                        <p>Deadline  12 June’13</p>
                                    </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                                </div>
                            </a>
                        </li>

                        <li class="external">
                            <a href="#">查看所有任务</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning"></span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p>服务器</p>
                        </li>
                        <li>
                            <div class="alert alert-info clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#">服务器1</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-danger clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#">服务器2</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="alert alert-success clearfix">
                                <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                <div class="noti-info">
                                    <a href="#">服务器3</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="查找">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="<?= $userinfor['photo']?>">
                        <span class="username"><?= $userinfor['user_name'] ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="<?=\yii\helpers\Url::to(['read/main/detalis'])?>"><i class=" fa fa-suitcase"></i>管理员信息</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>设置</a></li>
                        <li><a href="<?=\yii\helpers\Url::to(['backlogin/login/out-session'])?>"><i class="fa fa-key"></i>退出登录</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">

                <ul class="sidebar-menu" id="nav-accordion">
                    <li class="sub-menu">
                        <a href="<?=\yii\helpers\Url::to(['/read/main/main'])?>">
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>首页</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>管理员管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?=\yii\helpers\Url::to(['/read/allusers/add'])?>">更新用户</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/read/allusers/index'])?>">用户浏览</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>站内新闻管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?=\yii\helpers\Url::to(['/read/news/add'])?>">站内新闻查询</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/read/news/index'])?>">站内新闻更新</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-bullhorn"></i>
                            <span>小说类别管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?=\yii\helpers\Url::to(['read/category/add'])?>">添加分类</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['read/category/index'])?>">展示分类</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>小说管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?=\yii\helpers\Url::to(['/read/novel/add'])?>">小说添加</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/read/novel/index'])?>">小说查看</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                            <span>小说章节管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?=\yii\helpers\Url::to(['read/chapter/add'])?>">添加章节</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['read/chapter/index'])?>">浏览章节</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>作者管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?=\yii\helpers\Url::to(['/read/author/add'])?>">添加作者</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['/read/author/index'])?>">查看作者</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="<?=\yii\helpers\Url::to(['/read/allusers/add'])?>">
                            <i class="fa fa-th"></i>
                            <span>回复管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="#">查看回复</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>评论管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?=\yii\helpers\Url::to(['read/comment/add'])?>">添加评论</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['read/comment/index'])?>">查看评论</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>月票管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?=\yii\helpers\Url::to(['read/monthly/add'])?>">添加评论</a></li>
                            <li><a href="<?=\yii\helpers\Url::to(['read/monthly/index'])?>">查看评论</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>注册用户管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="#">用户信息展示</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <span>友情链接管理</span>
                        </a>
                        <ul class="sub">
                            <li><a href="http://www.baidu.com">百度</a></li>
                            <li><a href="http://www.163.com">网易</a></li>
                            <li><a href="http://www.qq.com">腾讯</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class=" wrapper">
            <div class="form-w3layouts">
                <?=$content?>
            </div>
        </section>
    </section>
    <script src="/moban/js/bootstrap.js"></script>
    <script src="/moban/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/moban/js/scripts.js"></script>
    <script src="/moban/js/jquery.slimscroll.js"></script>
    <script src="/moban/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="/moban/js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="/moban/js/jquery.scrollTo.js"></script>
    <!-- morris JavaScript -->
    <script>
        $(document).ready(function() {
            //BOX BUTTON SHOW AND CLOSE
            jQuery('.small-graph-box').hover(function() {
                jQuery(this).find('.box-button').fadeIn('fast');
            }, function() {
                jQuery(this).find('.box-button').fadeOut('fast');
            });
            jQuery('.small-graph-box .box-close').click(function() {
                jQuery(this).closest('.small-graph-box').fadeOut(200);
                return false;
            });

            //CHARTS
            function gd(year, day, month) {
                return new Date(year, month - 1, day).getTime();
            }

            graphArea2 = Morris.Area({
                element: 'hero-area',
                padding: 10,
                behaveLikeLine: true,
                gridEnabled: false,
                gridLineColor: '#dddddd',
                axes: true,
                resize: true,
                smooth:true,
                pointSize: 0,
                lineWidth: 0,
                fillOpacity:0.85,
                data: [
                    {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                    {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                    {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                    {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                    {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                    {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                    {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                    {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                    {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

                ],
                lineColors:['#eb6f6f','#926383','#eb6f6f'],
                xkey: 'period',
                redraw: true,
                ykeys: ['iphone', 'ipad', 'itouch'],
                labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });


        });
    </script>
    <!-- calendar -->
    <script type="text/javascript" src="/moban/js/monthly.js"></script>
    <script type="text/javascript">
        $(window).load( function() {

            $('#mycalendar').monthly({
                mode: 'event',

            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

            switch(window.location.protocol) {
                case 'http:':
                case 'https:':
                    // running on a server, should be good.
                    break;
                case 'file:':
                    alert('Just a heads-up, events will not work when run locally.');
            }

        });
    </script>
    <!-- //calendar -->
</body>
</html>
