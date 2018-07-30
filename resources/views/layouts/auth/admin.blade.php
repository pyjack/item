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
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
{{--{{ method_field('PATCH') }}--}}
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container  col-md-12">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ route('admin') }}">
                    {{ '老兵健康测试 | 后台管理系统' }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if(!session('admin'))
                        <li><a href="{{ route('admin.login') }}">登陆</a></li>
                        <li><a href="{{ route('register') }}">注册</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ session('admin') }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                {{--<li><a href="{{ url('/admin/{id}') }}">个人信息</a></li>--}}
                                <li>
                                    <a href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        退出
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer class="footer" id="footer">
        <div class="container text-center">
            <div class="row footer-bottom">
                <ul class="list-inline ">
                    <li>
                        <p>© {{date('Y')}}
                            <a target="_blank" href="http://www.haohanet.com">
                                浩瀚科技
                            </a>提供技术支持
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
