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

//        dd();

        //CGA 记分问题
        switch ($request->table) {
            case 'psycho_spirit':
                if ($score_total >= 0 && $score_total <= 5) {
                    $psycho_spirit_scores = 1;
                    $psycho_spirit_status = "无抑郁症";
                    break;
                }
                if ($score_total >= 6 && $score_total <= 10) {
                    $psycho_spirit_scores = 2;
                    $psycho_spirit_status = "轻度抑郁";
                    break;
                }
                if ($score_total >= 11 && $score_total <= 15) {
                    $psycho_spirit_scores = 3;
                    $psycho_spirit_status = "中重度抑郁";
                    break;
                }
                break;

            case 'nutrition':
                if ($score_total >= 11) {
                    $nutrition_scores = 1;
                    $nutrition_status = "营养良好";
                    break;
                }
                if ($score_total >= 6 && $score_total <= 10) {
                    $nutrition_scores = 2;
                    $nutrition_status = "潜在营养良好";
                    break;
                }
                if ($score_total >= 11 && $score_total <= 15) {
                    $nutrition_scores = 3;
                    $nutrition_status = "营养不良";
                    break;
                }
                break;

            case 'fall_risk':
                if ($score_total >= 0 && $score_total <= 2) {
                    $fall_risk_scores = 1;
                    $fall_risk_status = "低危";
                    break;
                }
                if ($score_total >= 3 && $score_total <= 9) {
                    $fall_risk_scores = 2;
                    $fall_risk_status = "中危";
                    break;
                }
                if ($score_total >= 10) {
                    $fall_risk_scores = 3;
                    $fall_risk_status = "高危";
                    break;
                }
                break;

            case 'cognitive_ability':
                if ($score_total >= 7) {
                    $cognitive_ability_scores = 1;
                    $cognitive_ability_status = "认知较好";
                    break;
                }
                if ($score_total >= 4 && $score_total <= 6) {
                    $cognitive_ability_scores = 2;
                    $cognitive_ability_status = "认知尚可";
                    break;
                }
                if ($score_total >= 0 && $score_total <= 4) {
                    $cognitive_ability_scores = 3;
                    $cognitive_ability_status = "认知较差";
                    break;
                }
                break;

            case 'torso_function':
                if ($score_total >= 0 && $score_total <= 5) {
                    $torso_function_scores = 1;
                    $torso_function_status = "无抑郁症";
                    break;
                }
                if ($score_total >= 6 && $score_total <= 10) {
                    $torso_function_scores = 2;
                    $torso_function_status = "轻度抑郁";
                    break;
                }
                if ($score_total >= 11 && $score_total <= 15) {
                    $torso_function_scores = 3;
                    $torso_function_status = "中重度抑郁";
                    break;
                }
        }

        //各项分数存入session
        $request->session()->put(
            session('user_id') . '_' . $request->table . '_scores',
            $score_total
        );

//        dd(session());

        //更新用户信息表总分，
        $score_status =
            session(session('user_id') . '_psycho_spirit_scores') &&
            session(session('user_id') . '_nutrition_scores') &&
            session(session('user_id') . '_fall_risk_scores') &&
            session(session('user_id') . '_cognitive_ability_scores') &&
            session(session('user_id') . '_torso_function_scores');
//            session(session('user_id') . '_trunk_disease_scores');

        if ($score_status) {
            $scores =
                $psycho_spirit_scores +
                $nutrition_scores +
                $fall_risk_scores +
                $cognitive_ability_scores +
                $torso_function_scores;


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
