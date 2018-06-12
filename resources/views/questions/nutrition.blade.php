@extends('layouts.auth.user')

@section('content')
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                <main class="col-md-12 main-content">
                    <div class="post-head text-center">
                        <h1 class="post-title">{{ $category }}</h1>
                    </div>
                    @foreach($questions as $value)
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
                    @endforeach
                    <nav class="pagination" role="navigation">
                        <span class="page-number">第 1 页 / 共 7 页</span>
                        <a class="older-posts" href="/page/2/">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </nav>
                </main>
                {{--<aside class="col-md-4 sidebar">--}}
                {{--<div class="widget"><h4 class="title">社区</h4>--}}
                {{--<div class="content community"><p>QQ群：462694081</p>--}}
                {{--<p><a href="http://wenda.golaravel.com/" title="Laravel中文网问答社区" target="_blank"--}}
                {{--onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i--}}
                {{--class="fa fa-comments"></i> 问答社区</a></p></div>--}}
                {{--</div>--}}
                {{--<div class="widget"><h4 class="title">下载</h4>--}}
                {{--<div class="content download"><a href="/download/" class="btn btn-default btn-block"--}}
                {{--onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '下载 Laravel &amp; Lumen'])">Laravel--}}
                {{--&amp; Lumen 一键安装包下载</a></div>--}}
                {{--</div>--}}
                {{--<div class="widget"><h4 class="title">文档</h4><a href="https://docs.golaravel.com/docs/5.6/"--}}
                {{--class="btn btn-default btn-block" target="_blank">5.6--}}
                {{--文档</a> <a href="https://docs.golaravel.com/docs/5.5/" class="btn btn-default btn-block"--}}
                {{--target="_blank">5.5 文档</a> <a href="https://docs.golaravel.com/docs/5.4/"--}}
                {{--class="btn btn-default btn-block" target="_blank">5.4--}}
                {{--文档</a> <a href="https://docs.golaravel.com/docs/5.3/" class="btn btn-default btn-block"--}}
                {{--target="_blank">5.3 文档</a> <a href="https://docs.golaravel.com/docs/5.2/"--}}
                {{--class="btn btn-default btn-block" target="_blank">5.2--}}
                {{--文档</a> <a href="https://docs.golaravel.com/docs/5.1/" class="btn btn-default btn-block"--}}
                {{--target="_blank">5.1 文档</a> <a href="https://docs.golaravel.com/docs/5.0/"--}}
                {{--class="btn btn-default btn-block" target="_blank">5.0--}}
                {{--文档</a> <a href="https://docs.golaravel.com/docs/4.2/" class="btn btn-default btn-block"--}}
                {{--target="_blank">4.2 中文文档</a> <a href="https://docs.golaravel.com/docs/4.1/"--}}
                {{--class="btn btn-default btn-block" target="_blank">4.1--}}
                {{--中文文档</a> <a href="https://docs.golaravel.com/docs/4.0/" class="btn btn-default btn-block"--}}
                {{--target="_blank">4.0 中文文档</a> <a href="https://lumen.golaravel.com/docs/"--}}
                {{--class="btn btn-default btn-block"--}}
                {{--target="_blank">Lumen 中文文档</a></div>--}}
                {{--</aside>--}}
            </div>
        </div>
    </section>
@endsection