<?php

namespace App\Http\Controllers\Question;

use App\Model\CognitiveAbility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CognitiveAbilityController extends Controller
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

        $questions = new CognitiveAbility;
        $questions->question = $request->question;
        dd($questions->save());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\CognitiveAbility  $cognitiveAbility
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CognitiveAbility $cognitiveAbility)
    {
        //
        if ($request->session()->has('user')) {

            return view('questions.cognitive')
                ->with('questions', $cognitiveAbility->all())
                ->with('category', '跌倒风险问题');
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\CognitiveAbility  $cognitiveAbility
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\CognitiveAbility  $cognitiveAbility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CognitiveAbility $cognitiveAbility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\CognitiveAbility  $cognitiveAbility
     * @return \Illuminate\Http\Response
     */
    public function destroy(CognitiveAbility $cognitiveAbility)
    {
        //
    }
}
