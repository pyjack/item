<?php

namespace App\Http\Controllers\Score;

use App\Model\Score;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScoreController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
        $user_id = [
            $request->user_id,
            $request->user_id,
            $request->user_id,
            $request->user_id,
            $request->user_id,
            $request->user_id,
            $request->user_id,
            $request->user_id,
        ];
//        $data = $request->except(['_token','user_id']);
        $score->user_id = $user_id;
//        $score->question_id = array_keys($data);
//        $score->scores = array_values($data);
//        dd($score);
//        $score->update();
                dd($score->update());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
