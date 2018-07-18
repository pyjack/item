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
                        <h1>{{ $psycho }}
                            @if(session(session('user_id').'_psycho_spirit_scores'))
                                <button type="button" class="btn alert-success">
                                    得分 {{session(session('user_id').'_psycho_spirit_scores')}} </button>
                            @endif
                        </h1>
                        {{$psychoSpirit->links()}}
                        {{--@foreach($psychoSpirit->all() as $value)--}}
                            {{--<a class="btn btn-default {{ session(session('user_id').'_psycho_spirit_scores') ? 'disabled alert-success' : '' }}"--}}
                               {{--href="{{session(session('user_id').'_psycho_spirit_scores') ? 'javascript:void(0);' :route('psycho')}}">--}}
                                {{--{{$value->id}}--}}
                            {{--</a>--}}
                        {{--@endforeach--}}
                    </div>
                    <div class="panel-heading text-center">
                        <h1>{{ $nutritions }}
                            @if(session(session('user_id').'_nutrition_scores'))
                                <button type="button" class="btn alert-success">
                                    得分 {{session(session('user_id').'_nutrition_scores')}} </button>
                            @endif
                        </h1>
                        {{$nutrition->links()}}

                    {{--@foreach($nutrition->all() as $value)--}}
                            {{--<a class="btn btn-default {{ session(session('user_id').'_nutrition_scores') ?'disabled alert-success':'' }}"--}}
                               {{--href="{{session(session('user_id').'_nutrition_scores') ? 'javascript:void(0);' :route('nutrition')}}"--}}
                            {{-->--}}
                                {{--{{$value->id}}--}}
                            {{--</a>--}}
                        {{--@endforeach--}}
                    </div>

                    <div class="panel-heading text-center">
                        <h1>{{ $trunk }}
                            @if(session(session('user_id').'_trunk_disease_scores'))
                                <button type="button" class="btn alert-success">
                                    得分 {{session(session('user_id').'_trunk_disease_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($trunkDisease->all() as $value)
                            <a class="btn btn-default {{ session(session('user_id').'_trunk_disease_scores') ? 'disabled alert-success' : '' }}"
                               href="{{session(session('user_id').'_trunk_disease_scores') ? 'javascript:void(0);' :route('trunk')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center">
                        <h1>{{ $torso }}
                            @if(session(session('user_id').'_torso_function_scores'))
                                <button type="button" class="btn alert-success">
                                    得分 {{session(session('user_id').'_torso_function_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($torsoFunction->all() as $value)
                            <a class="btn btn-default {{ session(session('user_id').'_torso_function_scores') ? 'disabled alert-success' : '' }}"
                               href="{{session(session('user_id').'_torso_function_scores') ? 'javascript:void(0);' :route('torso')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center">

                        <
                        <h1>{{ $cognitive }}
                            @if(session(session('user_id').'_cognitive_ability_scores'))
                                <button type="button" class="btn btn-default alert-success">
                                    得分 {{session(session('user_id').'_cognitive_ability_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($cognitiveAbility->all() as $value)
                            <a class="btn btn-default {{ session(session('user_id').'_cognitive_ability_scores') ? 'disabled alert-success' : '' }}"
                               href="{{session(session('user_id').'_cognitive_ability_scores') ? 'javascript:void(0);' :route('cognitive')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                    <div class="panel-heading text-center">
                        <h1>{{ $fall }}
                            @if(session(session('user_id').'_fall_risk_scores'))
                                <button type="button" class="btn alert-success">
                                    得分 {{session(session('user_id').'_fall_risk_scores')}} </button>
                            @endif
                        </h1>
                        @foreach($fallRisk->all() as $value)
                            <a class="btn btn-default {{ session(session('user_id').'_fall_risk_scores') ? 'disabled alert-success' : '' }}"
                               href="{{session(session('user_id').'_fall_risk_scores') ? 'javascript:void(0);' :route('fall')}}">
                                {{$value->id}}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection