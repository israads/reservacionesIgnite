<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="./js/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="./js/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./js/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./css/animate.min.css" rel="stylesheet" />
    <link href="./css/style.min.css" rel="stylesheet" />
    <link href="./css/style-responsive.min.css" rel="stylesheet" />
    <link href="./css/theme/default.css" rel="stylesheet" id="theme" />

    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="./js/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login login-with-news-feed">
        <!-- begin news-feed -->
        <div class="news-feed">
            <div class="news-image">
                <img src="./img/inicio.png" data-id="login-cover-image" alt="" />
            </div>
            {{--<div class="news-caption">
                <h4 class="caption-title"><i class="fa fa-diamond text-success"></i> Announcing the Reserva app</h4>
                <p>
                    Download the Reserva app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>--}}
        </div>
        <!-- end news-feed -->
        <!-- begin right-content -->
        <div class="right-content">

            @yield('content')
        </div>
        <!-- end right-container -->
    </div>
    <!-- end login -->

    <!-- begin theme-panel -->
    <div class="theme-panel">
        {{--<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>--}}
        <div class="theme-panel-content">
            <h5 class="m-t-0">Color Theme</h5>
            <ul class="theme-list clearfix">
                <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
            </ul>
            <div class="divider"></div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Header Styling</div>
                <div class="col-md-7">
                    <select name="header-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">inverse</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Header</div>
                <div class="col-md-7">
                    <select name="header-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                <div class="col-md-7">
                    <select name="sidebar-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">grid</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label">Sidebar</div>
                <div class="col-md-7">
                    <select name="sidebar-fixed" class="form-control input-sm">
                        <option value="1">fixed</option>
                        <option value="2">default</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                <div class="col-md-7">
                    <select name="content-gradient" class="form-control input-sm">
                        <option value="1">disabled</option>
                        <option value="2">enabled</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-5 control-label double-line">Content Styling</div>
                <div class="col-md-7">
                    <select name="content-styling" class="form-control input-sm">
                        <option value="1">default</option>
                        <option value="2">black</option>
                    </select>
                </div>
            </div>
            <div class="row m-t-10">
                <div class="col-md-12">
                    <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end theme-panel -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="./js/jquery/jquery-1.9.1.min.js"></script>
<script src="./js/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="./js/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="./js/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="./crossbrowserjs/html5shiv.js"></script>
<script src="./crossbrowserjs/respond.min.js"></script>
<script src="./crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="./js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="./js/jquery-cookie/jquery.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="./js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script type="text/javascript" src="//connect.facebook.net/en_US/sdk.js"></script>
<script src="{{asset('js/loginFb.js')}}"></script>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1993402327605673',
            cookie: true,
            xfbml: true,
            version: 'v2.10'
        });

        FB.AppEvents.logPageView();

    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) { return; }
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function statusChangeCallback(response) {
        if (response.status === 'connected') {
            var authResponse = response.authResponse;
            var userID = authResponse.userID;

            //getCurrentUserInfo(response);
            new Promise(function(resolve, reject) {
                
                FB.api('/me?fields=name,email', function(response) {
                    resolve(response);
                });
            })
            .then(function(response) {
                login(userID,response.name,response.status,response.email)
            });

           
        } else if (response.status === 'not_authorized') {
            FB.login(function (response) {
                statusChangeCallback2(response);
            }, { scope: 'public_profile,email' });

        } else {
            alert("not connected, not logged into facebook, we don't know");
        }
    }

    FB.getLoginStatus(function (response) {
        statusChangeCallback(response);
    });

    function checkLoginState() {
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });
    }

    
    function getCurrentUserInfo() {
        var self = this;
        var thenCallback = null;
        var name = "";
        self.then = function(callback){
            
            FB.api('/me', function(userInfo) {
                name = userInfo.name;
                thenCallback = callback;
            });
        };

        self.complete = function(args){
            console.log(name);
        }
      
    }

    $(document).ready(function () {
    });
</script>

</body>
</html>
