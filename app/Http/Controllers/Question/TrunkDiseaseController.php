<?php

namespace App\Http\Controllers\Question;

use App\Model\TrunkDisease;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrunkDiseaseController extends Controller
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
        $questions = new TrunkDisease;
        $questions->question = $request->question;
        $questions->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\TrunkDisease  $trunkDisease
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, TrunkDisease $trunkDisease)
    {
        //
        if ($request->session()->has('user')) {

            return view('questions.trunk')
                ->with('questions', $trunkDisease->all())
                ->with('category', '躯干疾病问题')
                ->with('table','trunk_disease');
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\TrunkDisease  $trunkDisease
     * @return \Illuminate\Http\Response
     */
    public function edit(TrunkDisease $trunkDisease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\TrunkDisease  $trunkDisease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrunkDisease $trunkDisease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\TrunkDisease  $trunkDisease
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrunkDisease $trunkDisease)
    {
        //
    }
}
