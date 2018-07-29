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
                        <h1>
                            <a class="btn-link {{ session(session('user_id').'_psycho_spirit_scores') ? 'disabled alert-success' : '' }}"
                               href="{{session(session('user_id').'_psycho_spirit_scores') ? 'javascript:void(0);' :route('psycho')}}">
                                {{ $psycho }}
                            </a>
                        </h1>
                        @if(session(session('user_id').'_psycho_spirit_scores'))
                            <button type="button" class="btn alert-success">
                                得分 {{session(session('user_id').'_psycho_spirit_scores')}} </button>
                        @endif
                    </div>

                    <div class="panel-heading text-center">
                        <h1>
                            <a class="btn-link {{ session(session('user_id').'_nutrition_scores') ?'disabled alert-success':'' }}"
                               href="{{session(session('user_id').'_nutrition_scores') ? 'javascript:void(0);' :route('nutrition')}}">
                                {{ $nutritions }}
                            </a>
                        </h1>
                        @if(session(session('user_id').'_nutrition_scores'))
                            <button type="button" class="btn alert-success">
                                得分 {{session(session('user_id').'_nutrition_scores')}} </button>
                        @endif
                    </div>

                    <div class="panel-heading text-center">
                        <h1>
                            <a class="{{ session(session('user_id').'_torso_function_scores') ? 'disabled alert-success' : '' }}"
                               href="{{session(session('user_id').'_torso_function_scores') ? 'javascript:void(0);' :route('torso')}}">
                                {{ $torso }}
                            </a>
                        </h1>
                        @if(session(session('user_id').'_torso_function_scores'))
                            <button type="button" class="btn alert-success">
                                得分 {{session(session('user_id').'_torso_function_scores')}} </button>
                        @endif
                    </div>

                    <div class="panel-heading text-center">
                        <h1>
                            <a class="{{ session(session('user_id').'_cognitive_ability_scores') ? 'disabled alert-success' : '' }}"
                                href="{{session(session('user_id').'_cognitive_ability_scores') ? 'javascript:void(0);' :route('cognitive')}}">
                                {{ $cognitive }}
                            </a>
                        </h1>
                        @if(session(session('user_id').'_cognitive_ability_scores'))
                            <button type="button" class="btn btn-default alert-success">
                                得分 {{session(session('user_id').'_cognitive_ability_scores')}} </button>
                        @endif
                    </div>

                    <div class="panel-heading text-center">
                        <h1>
                            <a class="btn-link {{ session(session('user_id').'_fall_risk_scores') ? 'disabled alert-success' : '' }}"
                                href="{{session(session('user_id').'_fall_risk_scores') ? 'javascript:void(0);' :route('fall')}}">
                                {{ $fall }}
                            </a>
                        </h1>
                        @if(session(session('user_id').'_fall_risk_scores'))
                            <button type="button" class="btn alert-success">
                                得分 {{session(session('user_id').'_fall_risk_scores')}} </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection