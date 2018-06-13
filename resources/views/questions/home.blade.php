@extends('layouts.auth.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if (session('user'))
                    <div class="alert alert-success">
                        {{ session('user') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row" id="login">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>{{ $category }}</h1></div>
                    @foreach($nutrition->all() as $value)
                    <div class="panel-body">
                        {{--<form id="question_form" class="form-horizontal" method="POST" action="{{ route('trunk') }}">--}}
                            {{--{{ csrf_field() }}--}}

                                {{--{{dd($nutrition)}}--}}
                                <div class="post-content">
                                    <h2>
                                        {{$value->id}}
                                        {{--<label class="pull-right">--}}
                                            {{--<input type="radio" class="radio-inline" name="score_{{ $value}}" value="1"--}}
                                                   {{--required> 是--}}
                                            {{--<input type="radio" class="radio-inline" name="score_{{ $value}}" value="0"--}}
                                                   {{--required> 否--}}
                                            {{--<input type="hidden" name="user_{{session('user_id').'_'.rand(0,9999)}}" value="{{session('user_id')}}">--}}
                                            {{--<input type="hidden" name="question_{{ $value->id }}" value="{{ $value->id }}">--}}
                                        {{--</label>--}}
                                    </h2>
                                </div>


                        {{--</form>--}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection