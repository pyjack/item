<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.login');
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
    public function store(Request $request, Admin $admin)
    {
        //
  //        dd($request->all());
//        dd($admin->where('phone', $request->phone));
        $result = $admin->where('phone', $request->phone)->first();
//        $check_password = Hash::check($request->password, $result->password);

//        dd($result->password);
        // 如果 $result 为 null，调用 $result->password
        // 会报 Trying to get property of non-object
        if ($result) {
            //验证密码
            $check_password = Hash::check($request->password, $result->password);
            if ($check_password) {

                //存入 Session
                $request->session()->put([
                    'admin' => $result->name,
                    'admin_id' => $result->id,
                ]);

                return redirect()->route('admin');
            }
            return back()->with('password', '密码错误');
        }
        return back()->with('phone', '电话号码错误');
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
