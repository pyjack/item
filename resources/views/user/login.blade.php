@extends('layouts.auth.user')

@section('content')
    <div class="container">
        <div class="row" id="login">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">用户登陆界面</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-4 control-label">姓名</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username"
                                           value="{{ old('username') }}" required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">电话</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number" class="form-control" name="phone"
                                           value="{{ old('phone') }}" required autofocus>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="gender" class="col-md-4 control-label">性别</label>

                                <div class="col-md-6">
                                    <select id="gender" type="" class="form-control" name="gender"
                                            value="{{ old('gender') }}" required autofocus>
                                        <option>请选择</option>
                                        <option value="0"> 男</option>
                                        <option value="1"> 女</option>
                                    </select>
                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">年龄</label>

                                <div class="col-md-6">
                                    <input id="age" type="number" class="form-control" name="age"
                                           value="{{ old('age') }}" min="0" max="150" required autofocus>

                                    @if ($errors->has('age'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('birth') ? ' has-error' : '' }}">
                                <label for="birth" class="col-md-4 control-label">出生日期</label>

                                <div class="col-md-6">
                                    <input id="birth" type="date" class="form-control" name="birth"
                                           value="{{ old('birth') }}" min="0" required autofocus>

                                    @if ($errors->has('birth'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birth') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('id_card') ? ' has-error' : '' }}">
                                <label for="id_card" class="col-md-4 control-label">身份证号</label>

                                <div class="col-md-6">
                                    <input id="id_card" type="text" class="form-control" name="id_card"
                                           value="{{ old('id_card') }}" placeholder="可不填写">

                                    @if ($errors->has('id_card'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_card') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        开始答题
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
