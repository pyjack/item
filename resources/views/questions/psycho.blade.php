@extends('layouts.auth.user')

@section('content')
    <div class="container">
        <div class="row" id="login">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>{{ $category }}</h1></div>
                    <div class="panel-body">
                        <form id="question_form" class="form-horizontal" method="POST" action="{{ route('psycho.submit') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="table" value="{{$table}}">
                            @foreach($questions as $value)
                                <div class="post-content">
                                    <h2>
                                        {{$value->id}} . {{ $value->questions }}
                                        <label class="pull-right">
                                            <input type="radio" class="radio-inline" name="score_{{ $value->id }}" value="{{$value->yes}}"
                                                   required> 是
                                            <input type="radio" class="radio-inline" name="score_{{ $value->id }}" value="{{$value->no}}"
                                                   required> 否
                                            <input type="hidden" name="user_{{session('user_id').'_'.rand(0,9999)}}" value="{{session('user_id')}}">
                                            <input type="hidden" name="question_{{ $value->id }}" value="{{ $value->id }}">
                                        </label>
                                    </h2>
                                </div>
                            @endforeach
                            <div class="form-group text-center">
                                <button class="btn btn-default" type="submit"><h4>提交</h4></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection