@extends('layouts.auth.admin')

@section('content')
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-3 pull-left">
                <div class="panel-group" id="panel-206251">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-206251"
                               href="#panel-element-206205">Collapsible Group Item #1</a>
                        </div>
                        <div id="panel-element-206205" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anim pariatur cliche...
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="panel-title" data-toggle="collapse" data-parent="#panel-206251"
                               href="#panel-element-954979">Collapsible Group Item #2</a>
                        </div>
                        <div id="panel-element-954979" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 pull-right">
                <form method="post" action="{{url('/admin')}}">

                </form>
                <div class="table-responsive text-center">
                    <table class="table table-bordered">
                        <thead class="">
                        <tr class="text-center">
                            <th class="text-center">
                                用户ID
                            </th>
                            <th class="text-center">
                                电话
                            </th>
                            <th class="text-center">
                                姓名
                            </th>
                            <th class="text-center">
                                GPA
                            </th>
                            <th class="text-center">
                                等级
                            </th>
                            <th class="text-center">
                                操作
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $value)
                            <tr class="error">

                                <td>
                                    {{$value->id}}
                                </td>
                                <td>
                                    {{$value->username}}
                                </td>
                                <td>
                                    {{$value->phone}}
                                </td>
                                <td>
                                    {{$value->score}}
                                </td>
                                <td>
                                    {{$value->gender == 0 ? '男' : '女'}}
                                </td>

                                <td>
                                    <a href="{{ route('user.info',$value->id) }}"> 详情 </a>
                                    {{--<a href="{{ route('') }}"> 详情 </a>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection
