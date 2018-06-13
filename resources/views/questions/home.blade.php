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
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h1>{{ $trunk }}</h1>
                        @foreach($trunkDisease->all() as $value)
                            <a class="btn btn-default " href="{{route('trunk')}}">
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

                    <div class="panel-heading text-center">
                        <h1>{{ $cognitive }}
                            @if(session('cognitive_ability_scores'))
                                <button type="button" class="btn btn-success"> 得分 {{session('cognitive_ability_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($cognitiveAbility->all() as $value)
                            <a class="btn btn-default" disabled="{{ session('cognitive_ability') ? 'disabled' : '' }}"
                               href="{{session('cognitive_ability') ? 'javascript:void(0);' :route('cognitive')}}"
                               title="{{session('cognitive_ability') ? '你已经做过此题' : '点击后，进入问题界面答题'}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>

                    <div class="panel-heading text-center">
                        <h1>{{ $nutritions }}
                            @if(session('nutrition_scores'))
                                <button type="button" class="btn btn-success"> 得分 {{session('nutrition_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($nutrition->all() as $value)
                            <a class="btn btn-default " disabled="{{ session('nutrition') ? 'disabled' : '' }}"
                               href="{{session('nutrition') ? 'javascript:void(0);' :route('nutrition')}}"
                               title="{{session('nutrition') ? '你已经做过此题' : '点击后，进入问题界面答题'}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>

                    <div class="panel-heading text-center"><h1>{{ $fall }}
                            @if(session('fall_risk_scores'))
                                <button type="button" class="btn btn-success"> 得分 {{session('fall_risk_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($fallRisk->all() as $value)
                            <a class="btn btn-default" disabled="{{ session('fall_risk') ? 'disabled' : '' }}"
                               href="{{session('fall_risk') ? 'javascript:void(0);' :route('fall')}}"
                               title="{{session('fall_risk') ? '你已经做过此题' : '点击后，进入问题界面答题'}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center"><h1>{{ $psycho }}</h1>
                        @foreach($psychoSpirit->all() as $value)
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