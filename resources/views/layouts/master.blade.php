<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Snapper</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}">
       <!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet">-->
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}">
       <!-- <link href="css/navbar.css" rel="stylesheet">-->
        @yield('css')
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-pg-collapsed>
        <div class="header">
            <!-- Static navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url("/")}}">Snapper</a>
                </div>
                <div class="navbar-collapse collapse">
                    <?php $loginStatus = Auth::check(); ?>
                    <ul class="nav navbar-nav navbar-left">
                        @if (!$loginStatus)
                            <li>
                                <a href="{{ url("/auth/user/login") }}">登录</a>
                            </li>
                            <li>
                                <a href="{{ url("/auth/user/register") }}">注册</a>
                            </li>
                        @else
                            <li>
                                <?php $userName = Auth::getUser()['name']; ?>
                                <a href="{{ url("/auth/user/register") }}">你好，{{$userName}}</a>
                            </li>
                            <li>
                                <a href="{{ url("/auth/user/logout") }}">登出</a>
                            </li>
                        @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="{{ url("/home") }}">首页</a>
                        </li>
                        @if (!$loginStatus)
                            <li>
                                <a href="{{ url("/auth/user/login") }}">我的账户</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ url("/user/main") }}">我的账户</a>
                            </li>
                        @endif
                        <li>
                            <a href="../navbar-fixed-top/">我要出国</a>
                        </li>
                        <li>
                            <a href="../navbar-fixed-top/">帮助/反馈</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- Main component for a primary marketing message or call to action -->
        </div>
        <div class="container search-panel">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <input type="text" class="form-control searchBox" placeholder="Placeholder text">
                    <a name="anchor" href="#" class="advance-link">高级搜索</a>
                </div>
            </div>
        </div>
        @section('sidebar')

        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
    <footer>
        <div class="container">
            <div class="col-md-4 link-1">
                <h4>??</h4>
                <ul class="nav menu">
                    <li class="item">
                        <a href="">????</a>
                    </li>
                    <li class="item">
                        <a href="">????</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 link-2">
                <h4>??</h4>
                <ul class="nav menu">
                    <li class="item">
                        <a href="">????</a>
                    </li>
                    <li class="item-4">
                        <a href="">????</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 link-3">
                <h4>??</h4>
                <ul class="nav menu">
                    <li class="item">
                        <a href="">????</a>
                    </li>
                    <li class="item">
                        <a href="">????</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ URL::asset('script/jquery-2.1.4.js') }}"></script>
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('script/jquery.flexslider-min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    @yield('javascript')
</html>

