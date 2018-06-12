<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        return view('user.login');
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
        //
        $user = new User;

        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:18',
            'phone' => 'required|string|max:12|unique:users',
            'gender' => 'required|bool',
            'age' => 'required|max:3',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
//        dd($request->username);

//        dd($request->all());
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->birth = $request->birth;
        $user->id_card = $request->id_card;
//        dd($user);
        $user->save();

        $request->session()->put('user', $request->username);
        $request->session()->put('user_id', $user->id);
        $request->session()->flash('login','您已登陆登陆，请开始答题');

        return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
