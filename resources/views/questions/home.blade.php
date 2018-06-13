@extends('layouts.auth.user')

@section('content')
    <div class="container">
        @if (session('login'))
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="alert alert-success text-center">
                        {{ session('login') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row" id="login">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>{{ $trunk }}</h1>
                        @foreach($nutrition->all() as $value)
                            <a class="btn btn-default" href="{{route('trunk')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center"><h1>{{ $torso }}</h1>
                        @foreach($torsoFunction->all() as $value)
                            <a class="btn btn-default" href="{{route('trunk')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>

                    <div class="panel-heading text-center"><h1>{{ $cognitive }}</h1>
                        @foreach($cognitiveAbility->all() as $value)
                            <a class="btn btn-default" href="{{route('cognitive')}}">
                                <h>{{$value->id}}</h>
                            </a>
                        @endforeach
                    </div>

                    <div class="panel-heading text-center"><h1>{{ $torso }}</h1></div>
                    @foreach($torsoFunction->all() as $value)
                        <a class="btn btn-default" href="{{route('trunk')}}">
                            {{$value->id}}
                        </a>
                    @endforeach

                    <div class="panel-heading text-center"><h1>{{ $nutritions }}</h1>
                        @foreach($nutrition->all() as $value)
                            <a class="btn btn-default" href="{{route('nutrition')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center"><h1>{{ $psycho }}</h1>
                        @foreach($torsoFunction->all() as $value)
                            <a class="btn btn-default" href="{{route('psycho')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection