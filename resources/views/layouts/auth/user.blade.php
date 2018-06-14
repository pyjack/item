<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '中澳医院老兵健康评估测试') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app text-center">
    <nav class="navbar navbar-default navbar-static-top text-center">
        <div class="container text-center">
            <div class="navbar-header text-center">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav navbar-nav text-center">
                    <a class="text-center navbar-brand" href="{{ url('#') }}">
                        {{ config('app.name')}}
                    </a>
                    <!-- Authentication Links -->
                    @if (session('user'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ session('user') }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li class=""><a href="{{ url('/') }}">个人信息</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        退出
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
                {{--</div>--}}
            </div>

        </div>
    </nav>
    @yield('content')

</div>
<footer class="footer ">
    <div class="container">
        <div class="row footer-top">
            <div class="col-md-6 col-lg-6">
                <h4>
                    <img src="">
                </h4>
                <p>我们一直致力于为广大老兵的身体将看提供更多的优质技术文档和辅助开发工具！</p>
            </div>
            <div class="col-md-6  col-lg-5 col-lg-offset-1">
                <div class="row about">
                    <div class="col-sm-3">
                        <h4>关于</h4>
                        <ul class="list-unstyled">
                            <li><a href="/about/">关于我们</a></li>
                            <li><a href="/ad/">广告合作</a></li>
                            <li><a href="/links/">友情链接</a></li>
                            <li><a href="/hr/">招聘</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4>联系方式</h4>
                        <ul class="list-unstyled">
                            <li><a href="http://weibo.com/bootcss" title="Bootstrap中文网官方微博" target="_blank">新浪微博</a>
                            </li>
                            <li><a href="mailto:admin@bootcss.com">电子邮件</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h4>旗下网站</h4>
                        <ul class="list-unstyled">
                            <li><a href="http://www.golaravel.com/" target="_blank">Laravel中文网</a></li>
                            <li><a href="http://www.ghostchina.com/" target="_blank">Ghost中国</a></li>
                            <li><a href="http://www.bootcdn.cn/" target="_blank">BootCDN</a></li>
                            <li><a href="https://pkg.phpcomposer.com/" target="_blank">Packagist中国镜像</a></li>
                            <li><a href="https://www.return.net/" target="_blank">燃腾教育</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h4>赞助商</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.upyun.com" target="_blank">又拍云</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <li><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a></li>
                <li>京公网安备11010802014853</li>
            </ul>
        </div>
    </div>
</footer>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
