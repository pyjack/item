<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Model\Score;
use Illuminate\Http\Request;

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Score $score)
    {
        //
        $score_total = 0;
        $data = $request->all();
        unset($data['_token']);
        unset($data['table']);
        $data = array_chunk($data, 3);
        foreach ($data as $value) {
            $score->insert([
                'scores' => head($value),
                'user_id' => $value[1],
                $request->table.'_id' => last($value), //TODO 数组越界代替方法，后期处理
            ]);
            $score_total += $value[0];
        }
//        dd($score_total);
        $request->session()->put($request->table,$request->table);
        $request->session()->flash($request->table.'_scores',$score_total);
//        dd($request->table.'_scores');
        return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Score $score
     * @return \Illuminate\Http\Response
     */
    public function show(Score $score)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Score $score
     * @return \Illuminate\Http\Response
     */
    public function edit(Score $score)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Score $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Score $score)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Score $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(Score $score)
    {
        //
    }
}
