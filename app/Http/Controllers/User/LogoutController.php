<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        //判断session里面是否有值(用户是否登陆)
        if ($request->session()->has('user')) {
            //移除session
            $request->session()->pull(session('user_id').'_trunk_disease_scores');
            $request->session()->pull(session('user_id').'_torso_function_scores');
            $request->session()->pull(session('user_id').'_cognitive_ability_scores');
            $request->session()->pull(session('user_id').'_fall_risk_scores');
            $request->session()->pull(session('user_id').'_nutrition_scores');
            $request->session()->pull(session('user_id').'_psycho_spirit_scores');
            $request->session()->pull('user_id');
            $request->session()->pull('user');
            return redirect()->route('login');
        }
        return redirect()->route('login');
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
