@extends('layouts.auth.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    @if (session('admin'))
                        <div class="alert alert-success">
                            {{ session('admin') }} 您已登陆!
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
