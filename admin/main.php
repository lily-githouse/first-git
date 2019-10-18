<!doctype html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http - equiv="X-UA-Compatible" content="ie=edge">
    <title> 导航管理页</title>
    <!--    <link rel = "stylesheet" href = "../static/css/bootstrap.min.css" >-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    aside {
        width: 200px;
        position: absolute;
        top: 50px;
        bottom: 0;
    }

    main {
        position: absolute;
        left: 200px;
        right: 0;
        top: 50px;
        bottom: 0;

    }

    /*    去除侧边栏内填充*/
    /*去除侧边栏底边距*/
    .panel {
        margin: 0;
        border -radius: 0;
    }

    .list-group

    -
    item {
        border: none;
    }

    /*去除侧边栏圆角*/
    .panel

    -
    heading {
        border -radius: 0;
    }

    main > iframe {
        width: 100%;
        height: 100%;
    }

    .glyphicon {
        float: right;
        transition: all .3s ease;
    }

    .glyphicon.active {
        transform: rotateZ(180deg);
    }
</style>
<div class="panel">
    <!--    标题栏-->
    <nav class="navbar navbar-active" style="margin-bottom:0">
        <div class="container">
            <!--Brand and toggle get grouped for better mobile display-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data - toggle="collapse"
                        data - target="#bs-example-navbar-collapse-1" aria - expanded="false">
                    <span class="sr-only"> Toggle navigation </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> 高品质耳机</a>
            </div>

            <!--Collect the nav links, forms, and other content for toggling-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"> Link <span class="sr-only"> (current)</span></a></li>
                    <li><a href="#"> Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data - toggle="dropdown" role="button" aria -
                           haspopup="true"
                           aria - expanded="false"> Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"> Action</a></li>
                            <li><a href="#"> Another action </a></li>
                            <li><a href="#"> Something else here </a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"> Separated link </a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"> One more separated link </a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"> Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"> Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data - toggle="dropdown" role="button" aria -
                           haspopup="true"
                           aria - expanded="false"> Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"> Action</a></li>
                            <li><a href="#"> Another action </a></li>
                            <li><a href="#"> Something else here </a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"> Separated link </a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar - collapse-->
        </div><!-- /.container - fluid-->
    </nav>

    <!--侧边栏-->
    <aside>
        <div class="panel panel-default">
            <div class="panel-heading"> 导航管理
                <i class="glyphicon glyphicon-menu-down"></i></div>
            <div class="panel-body">
                <ul class="list-group">
                    <a href="nav_insert.php" target="right">
                        <li class="list-group-item"> 添加导航</li>
                    </a>
                    <a href="nav_select.php" target="right">
                        <li class="list-group-item"> 查看导航</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"> 产品分类
                <i class="glyphicon glyphicon-menu-down"></i></div>
            <div class="panel-body">
                <ul class="list-group">
                    <a href="" target="right">
                        <li class="list-group-item"> 添加分类</li>
                    </a>
                    <a href="cate_select.php" target="right">
                        <li class="list-group-item"> 查看分类</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">商品管理<i class="glyphicon glyphicon-menu-down"></i></div>
            <div class="panel-body">
                <ul class="list-group">
                    <a href="goods_insert.php" target="right">
                        <li class="list-group-item">添加商品</li>
                    </a>
                    <a href="goods_select.php" target="right">
                        <li class="list-group-item">查看商品</li>
                    </a>
                </ul>
            </div>
        </div>
        <!--        新闻资讯模块-->
        <div class="panel panel-default">
            <div class="panel-heading">新闻资讯
                <i class="glyphicon glyphicon-menu-down"></i></div>
            <div class="panel-body">
                <ul class="list-group">
                    <a href="news_select.php" target="right">
                        <li class="list-group-item">查看新闻列表</li>
                    </a>
                    <a href="news_insert.php" target="right">
                        <!--                        添加包含了编辑（增，删，改）-->
                        <li class="list-group-item">添加新闻列表</li>
                    </a>
                </ul>
            </div>
        </div>
        <!--        在线预约模块-->
        <div class="panel panel-default">
            <div class="panel-heading">在线预约
                <i class="glyphicon glyphicon-menu-down"></i></div>
            <div class="panel-body">
                <ul class="list-group">
                    <a href="online_insert.php" target="right">
                        <li class="list-group-item">添加预约</li>
                    </a>
                    <a href="online_select.php" target="right">
                        <!--                        包含了取消预约-->
                        <li class="list-group-item">查看预约</li>
                    </a>

                </ul>
            </div>
        </div>
    </aside>
    <!--    -->
    <main>
        <iframe frameborder=0 name="right"></iframe>
    </main>
</div>
</body>
</html>
<script src="../static/js/jquery-3.4.1.min.js"></script>

<script>

    $(".panel-heading").on("click", function () {
        $(this).next(".panel-body").slideToggle(); //展开合起
        $(this).children("i").toggleClass("active"); //点击当前箭头旋转(给当前箭头加active类)

    });

</script>
