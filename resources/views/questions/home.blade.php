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
                    <div class="panel-heading text-center"><h1>{{ $trunk }}</h1></div>
                    @foreach($nutrition->all() as $value)
                        <a class="btn btn-default ">
                            {{$value->id}}
                        </a>
                    @endforeach
                    <div class="panel-heading text-center"><h1>{{ $torso }}</h1></div>
                    @foreach($torsoFunction->all() as $value)
                        <a class="btn btn-default ">
                            <h>{{$value->id}}</h>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection