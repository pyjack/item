@extends('layouts.auth.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session('login'))
                    <div class="alert alert-success">
                        {{ session('login') }}
                    </div>
                @endif
            </div>
        </div>
        @foreach($question_table as $table_name => $question)
            <div class="row">
                <div class="panel-heading h1">{{ $table_name }}</div>
                <ul class="nav nav-tabs">
                    <li class="btn-toolbar" role="toolbar" aria-label="...">
                        @foreach($question as $id => $value)
                            <form>
                                <div class="btn-group" role="group" aria-label="...">
                                    <div class="">
                                        <p class="h1">
                                            <a type="button" class="btn btn-default" data-toggle="tooltip"
                                               data-placement="top"
                                               title="{{ $id }}">
                                                {{ $id }}
                                            </a>
                                            {{ $value }}
                                        </p><br/>
                                    </div>

                                    <div class="text-center">
                                        <label class="h2 pull-left">是
                                            <input class="h2" width="2px;" type="radio" name="score" value="1">
                                        </label>
                                        <label class="h2">否
                                            <input class="h2" width="2px;" type="radio" name="score" value="0">
                                        </label>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
