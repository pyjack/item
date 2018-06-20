<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Model\Score;
use App\Model\User;
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
    public function store(Request $request, Score $score, User $user)
    {
        $score_total = 0;
        $data = $request->all();
        unset($data['_token']);
        unset($data['table']);
        $data = array_chunk($data, 3);
        foreach ($data as $value) {
            $score->insert([
                'scores' => head($value),
                'user_id' => $value[1],
                $request->table . '_id' => last($value), //TODO 数组越界代替方法，后期处理
            ]);
            $score_total += $value[0];
        }
        //各项分数存入session
        $request->session()->put(
            session('user_id') . '_' . $request->table . '_scores',
            $score_total
        );

        //更新用户信息表总分，
        $score_status =
            session(session('user_id') . '_torso_function_scores') &&
            session(session('user_id') . '_trunk_disease_scores') &&
            session(session('user_id') . '_cognitive_ability_scores') &&
            session(session('user_id') . '_nutrition_scores') &&
            session(session('user_id') . '_fall_risk_scores') &&
            session(session('user_id') . '_psycho_spirit_scores');

        if ($score_status) {
            $scores =
                session(session('user_id') . '_torso_function_scores') +
                session(session('user_id') . '_trunk_disease_scores') +
                session(session('user_id') . '_cognitive_ability_scores') +
                session(session('user_id') . '_nutrition_scores') +
                session(session('user_id') . '_fall_risk_scores') +
                session(session('user_id') . '_psycho_spirit_scores');

            $update_score = $user->where('id', session('user_id'));

            $update_score->update(['score' => $scores]);
        }
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
