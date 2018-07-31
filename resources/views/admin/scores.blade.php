@extends('layouts.auth.admin')

@section('content')
    <div class="container">
        <div class="row" id="login">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @foreach($data as $key => $value)
                            <div class="post-content">
                                <h2>
                                    {{$key}} . {{ $value }}
                                </h2>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection