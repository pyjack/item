@extends('layouts.auth.user')

@section('content')
    <section class="content-wrap">
        <div class="container">
            <div class="row">
                <main class="col-md-12 main-content">
                    <div class="post-head text-center">
                        <h1 class="post-title">{{ $category }}</h1>
                    </div>
                    <form class="form form-horizontal form-group " method="post" action="{{route('trunk')}}">
                        @foreach($questions as $value)
                            <article class="post form-horizontal table-bordered">

                                <div class="post-content">
                                    <h2>{{$value->id}} {{ $value->questions }}
                                        <label class="pull-right">
                                            <input  class="" type="radio" name="{{$value->id}}" value="1"> 是
                                        </label>
                                       <button></button>
                                        <label class="pull-right">
                                            <input  class="" type="radio" name="{{$value->id}}" value="0"> 否
                                        </label>
                                    </h2>
                                </div>
                            </article>

                        @endforeach
                    </form>
                    <div class="">{{ $questions->links() }}</div>
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