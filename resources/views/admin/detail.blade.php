@extends('layouts.auth.admin')

@section('content')
    <div class="container col-md-12">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{url('/admin')}}">
                    <div class="table-responsive text-center">
                        <table class="table table-bordered">
                            <thead class="">
                            <tr class="text-center">
                                <th class="text-center">
                                    选择
                                </th>
                                <th class="text-center">
                                    问题类别
                                </th>
                                <th class="text-center">
                                    分数
                                </th>
                                <th class="text-center">
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        {{ $value }}
                                    </td>
                                    <td>

                                    </td>
                                    <td colspan="2">
                                        <a href="#"> 填写 </a>
                                        <a href="{{ route('user.detail.scores',[$user_id, $key]) }}"> 详情 </a>
                                        <a href="#"> 打印预览 </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <thead class="">
                            <tr class="text-center">
                                <th class="text-center">
                                    <input type="checkbox"> 全选
                                </th>
                                <th class="text-center" colspan="4">
                                    <a href="#"> 打印 </a>
                                </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection