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
                    <div class="panel-heading text-center">
                        <h1>{{ $trunk }}
                            @if(session('trunk_disease_scores'))
                                <button type="button" class="btn btn-success">
                                    得分 {{session('trunk_disease_scores')}} </button>
                            @elseif
                                <button type="button" class="btn btn-success">
                                    得分 {{session('trunk_disease_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($trunkDisease->all() as $value)
                            <a class="btn btn-default " href="{{route('trunk')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center">
                        <h1>{{ $torso }}
                            @if(session('torso_ability_scores'))
                                <button type="button" class="btn btn-success">
                                    得分 {{session('torso_ability_scores')}} </button>
                            @elseif
                                <button type="button" class="btn btn-success">
                                    得分 {{session('torso_ability_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($torsoFunction->all() as $value)
                            <a class="btn btn-default" href="{{route('torso')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center">
                        <h1>{{ $cognitive }}
                            @if(session('cognitive_ability_scores'))
                                <button type="button" class="btn btn-success">
                                    得分 {{session('cognitive_ability_scores')}} </button>
                            @elseif
                                <button type="button" class="btn btn-success">
                                    得分 {{session('cognitive_ability_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($cognitiveAbility->all() as $value)
                            <a class="btn btn-default" disabled="{{ session('cognitive_ability') ? 'disabled' : '' }}"
                               href="{{session('cognitive_ability') ? 'javascript:void(0);' :route('cognitive')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center">
                        <h1>{{ $nutritions }}
                            @if(session('nutrition_scores'))
                                <button type="button" class="btn btn-success">
                                    得分 {{session('nutrition_scores')}} </button>
                            @elseif
                                <button type="button" class="btn btn-success">
                                    得分 {{session('nutrition_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($nutrition->all() as $value)
                            <a class="btn btn-default {{ session('nutrition') ?'disabled':'' }}"
                               href="{{session('nutrition') ? 'javascript:void(0);' :route('nutrition')}}"
                            >
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center">
                        <h1>{{ $fall }}
                            @if(session('fall_risk_scores'))
                                <button type="button" class="btn btn-success">
                                    得分 {{session('fall_risk_scores')}} </button>
                            @elseif
                                <button type="button" class="btn btn-success">
                                    得分 {{session('fall_risk_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($fallRisk->all() as $value)
                            <a class="btn btn-default {{ session('fall_risk') ? 'disabled' : '' }}"
                               href="{{session('fall_risk') ? 'javascript:void(0);' :route('fall')}}"
                               title="{{session('fall_risk') ? '你已经做过此题' : '点击后，进入问题界面答题'}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center">
                        <h1>{{ $psycho }}
                            @if(session('psycho_spirit_scores'))
                                <button type="button" class="btn btn-success">
                                    得分 {{session('psycho_spirit_scores')}} </button>
                            @elseif
                                <button type="button" class="btn btn-success">
                                    得分 {{session('psycho_spirit_scores')}} </button>
                            @endif
                        </h1>
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