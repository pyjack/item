@extends('layouts.auth.user')

@section('content')
    <div class="container">
        <div class="row" id="login">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>{{ $category }}</h1></div>
                    <div class="panel-body">
                        <form id="question_form" class="form-horizontal" method="POST" action="{{ route('trunk') }}">
                            {{ csrf_field() }}
                            @foreach($questions as $value)
                                <div class="post-content">
                                    <h2>
                                        {{$value->id}} . {{ $value->questions }}
                                        <label class="pull-right">
                                            <input type="radio" class="radio-inline" name="{{ $value->id }}" value="1"
                                                   required> 是
                                            <input type="radio" class="radio-inline" name="{{ $value->id }}" value="0"
                                                   required> 否
                                            <input type="hidden" name="user_id" value="{{session('user_id')}}">
                                        </label>
                                    </h2>
                                </div>
                            @endforeach
                            <div class="form-group text-center">
                                <ul class="pagination">
                                    <li class="pull-left {{ $questions->currentPage() == 1 ? 'disabled' : ''}} "><a href="{{ $questions->currentPage() == 1 ? 'javascript:void(0);' : $questions->previousPageUrl()}}"><span> << </span></a></li>
                                    <li><button class="btn btn-default"><span>&nbsp;</span>翻页</button></li>
                                    <li class="pull-right {{ $questions->currentPage() == $questions->lastPage() ? 'disabled' : ''}}"><a href="{{ $questions->currentPage() == $questions->lastPage() ? 'javascript:void(0);' : $questions->nextPageUrl()}}"
                                                                                                                                         onclick="event.preventDefault();
                                                     document.getElementById('question_form').submit();"><span> >> </span></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection