<?php

namespace App\Http\Controllers\Question;

use App\Model\TorsoFunction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TorsoFunctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $questions = new TorsoFunction;
        $questions->question = $request->question;
        $questions->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\TorsoFunction  $torsoFunction
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, TorsoFunction $torsoFunction)
    {
        //
        if ($request->session()->has('user')) {

            return view('questions.torso')
                ->with('questions', $torsoFunction->all())
                ->with('category', '躯干功能问题')
                ->with('table','torso_function');
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TorsoFunction  $torsoFunction
     * @return \Illuminate\Http\Response
     */
    public function edit(TorsoFunction $torsoFunction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TorsoFunction  $torsoFunction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TorsoFunction $torsoFunction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TorsoFunction  $torsoFunction
     * @return \Illuminate\Http\Response
     */
    public function destroy(TorsoFunction $torsoFunction)
    {
        //
    }
}
