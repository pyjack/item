@extends('layouts.auth.user')

@section('content')
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                <main class="col-md-12 main-content">
                    <div class="post-head text-center">
                        <h1 class="post-title"></h1>
                    </div>

                    <article class="post">

                        <div class="featured-media"><a href="/post/laravel-5-6-is-now-released/"><img
                                        src="/assets/images/laravel-5.6.png" alt="Laravel 5.6 版本正式发布"></a></div>
                        <div class="post-content"><p></p>
                            <p>Laravel 5.6 是继 5.5 之后 Laravel 官方发布的最新版本。此版本包含众多新特性，接下来我们说一说几个重要的特性。如需查看完成的发布日志，请点击<a
                                        href="https://github.com/laravel/framework/blob/5.6/CHANGELOG-5.6.md">这里</a>。
                            </p>
                            <p></p></div>
                        <div class="post-permalink">
                            <a href="" class="btn btn-default">阅读全文</a>
                        </div>
                        <footer class="post-footer clearfix"></footer>
                    </article>

                    <nav class="pagination" role="navigation">
                        <span class="page-number">第 1 页 / 共 7 页</span>
                        <a class="older-posts" href="/page/2/">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </nav>
                </main>
@endsection