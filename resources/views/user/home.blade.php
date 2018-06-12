@extends('layouts.auth.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('login'))
                    <div class="alert alert-success">
                        {{ session('login') }}
                    </div>
                @endif
            </div>
        </div>
        @foreach($question_table as $table_name => $question)
            <div class="row">
                <div class="panel-heading h1">{{ $table_name }}</div>
                <ul class="nav nav-tabs">
                    <li class="btn-toolbar" role="toolbar" aria-label="...">
                        @foreach($question as $id => $value)
                            <form>
                                <div class="btn-group" role="group" aria-label="...">
                                    <div class="">
                                        <p class="h1">
                                            <a type="button" class="btn btn-default" data-toggle="tooltip"
                                               data-placement="top"
                                               title="{{ $id }}">
                                                {{ $id }}
                                            </a>
                                            {{ $value }}
                                        </p><br/>
                                    </div>

                                    <div class="text-center">
                                        <label class="h2 pull-left">是
                                            <input class="h2" width="2px;" type="radio" name="score" value="1">
                                        </label>
                                        <label class="h2">否
                                            <input class="h2" width="2px;" type="radio" name="score" value="0">
                                        </label>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </li>
                </ul>
            </div>
        @endforeach

        {{--@foreach($question_table as $table_name => $question)--}}
        {{--<div class="row">--}}
        {{--<form class="form-horizontal" method="POST" action="{{url('/question')}}">--}}
        {{--<div class="form-group">--}}
        {{--{{$question_table->links()}}--}}
        {{--{{ print_r($table_name) }}--}}
        {{--{{ $question['id'] }}--}}
        {{--{{ $question['questions'] }}--}}
        {{--{{ $question['total'] }}--}}

        {{--@foreach($question as $id => $value)--}}
        {{--<div class="jumbotron">--}}
        {{--<h1>--}}
        {{--{{ $question['question'] }}--}}
        {{--{{ $value }}--}}
        {{--</h1>--}}
        {{--<div class="form">--}}
        {{--<a class="">--}}
        {{--<button class="h1 btn btn-link">是--}}
        {{--<input type="hidden" name="score" value="1">--}}
        {{--</button>--}}
        {{--</a>--}}

        {{--<a class="">--}}
        {{--<button class="h1 btn btn-link">否--}}
        {{--<input type="hidden" name="score" value="1">--}}
        {{--</button>--}}
        {{--</a>--}}
        {{--</div>--}}
        {{--<input type="hidden" name="user_id" value="">--}}
        {{--<input type="hidden" name="question" value="">--}}
        {{--<a class="h1 btn btn-default pull-left" type="submit" href="#"> 上 一 题</a>--}}
        {{--<a class="h1 btn btn-default pull-right" type="submit" href="#">确定</a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--@endforeach--}}
        {{--</form>--}}
        {{--</div>--}}
        {{--@endforeach--}}
    </div>
@endsection
