<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //表单数据验证
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:18',
            'phone' => 'required|string|max:12|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);

        //验证失败，返回错误消息
        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        //写入数据库
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->phone = $request->phone;
        $admin->password = Hash::make($request->password);
        $admin->save();

        //写入Session
        $request->session()->put('admin',$request->name);

        //跳转到管理界面
        return redirect()->route('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
