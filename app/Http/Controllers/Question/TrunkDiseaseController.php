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
    public function show()
    {
        //
        $trunkDisease =new TrunkDisease;
        return $trunkDisease->pluck('questions','id');
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
