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
    public function show()
    {
        //
        $cognitiveAbility = new CognitiveAbility;
        return $cognitiveAbility->pluck('questions','id');
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
