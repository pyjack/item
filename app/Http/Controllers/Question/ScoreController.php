<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Model\Score;
use App\Model\User;
use App\Model\TrunkDisease;
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
    public function store(Request $request,Score $score, User $user,TrunkDisease $trunkDisease)
    {
        $score_total = 0;
        $data = $request->all();
        unset($data['_token']);
        unset($data['table']);


        if ($request->user_id) {

            unset($data['user_id']);

            $data = array_chunk($data, 3);
            $id = $request->user_id;

            foreach ($data as $value) {
                $s = $score->insert([
                    'scores' => head($value),
                    'user_id' => $id,
                    $request->table . '_id' => last($value), //TODO 数组越界代替方法，后期处理
                ]);
                $score_total += $value[0];
            }
        } else {

            $data = array_chunk($data, 3);

            foreach ($data as $value) {
                $score->insert([
                    'scores' => head($value),
                    'user_id' => $value[1],
                    $request->table . '_id' => last($value), //TODO 数组越界代替方法，后期处理
                ]);
                $score_total += $value[0];
            }
        }

//CGA 记分问题
        switch ($request->table) {
            case 'psycho_spirit':
                if ($score_total >= 0 && $score_total <= 5) {
                    $cga = 1;
                    $psycho_spirit_status = "无抑郁症";
                    break;
                }
                if ($score_total >= 6 && $score_total <= 10) {
                    $cga = 2;
                    $psycho_spirit_status = "轻度抑郁";
                    break;
                }
                if ($score_total >= 11 && $score_total <= 15) {
                    $cga = 3;
                    $psycho_spirit_status = "中重度抑郁";
                    break;
                }
                break;

            case 'nutrition':
                if ($score_total >= 11) {
                    $cga = 1;
                    $nutrition_status = "营养良好";
                    break;
                }
                if ($score_total >= 6 && $score_total <= 10) {
                    $cga = 2;
                    $nutrition_status = "潜在营养良好";
                    break;
                }
                if ($score_total >= 11 && $score_total <= 15) {
                    $cga = 3;
                    $nutrition_status = "营养不良";
                    break;
                }
                break;

            case 'fall_risk':
                if ($score_total >= 0 && $score_total <= 2) {
                    $cga = 1;
                    $fall_risk_status = "低危";
                    break;
                }
                if ($score_total >= 3 && $score_total <= 9) {
                    $cga = 2;
                    $fall_risk_status = "中危";
                    break;
                }
                if ($score_total >= 10) {
                    $cga = 3;
                    $fall_risk_status = "高危";
                    break;
                }
                break;

            case 'cognitive_ability':
                if ($score_total >= 7) {
                    $cga = 1;
                    $cognitive_ability_status = "认知较好";
                    break;
                }
                if ($score_total >= 5 && $score_total <= 6) {
                    $cga = 2;
                    $cognitive_ability_status = "认知尚可";
                    break;
                }
                if ($score_total >= 0 && $score_total <= 4) {
                    $cga = 3;
                    $cognitive_ability_status = "认知较差";
                    break;
                }
                break;

            case 'torso_function':
                if ($score_total >= 60) {
                    $cga = 1;
                    $torso_function_status = "生活基本自理";
                    break;
                }
                if ($score_total >= 20 && $score_total <= 59) {
                    $cga = 2;
                    $torso_function_status = "生活需要帮助";
                    break;
                }
                if ($score_total >= 0 && $score_total <= 20) {
                    $cga = 3;
                    $torso_function_status = "生活完全需要依赖";
                    break;
                }
                break;
            case 'trunk_disease':
                if ($score_total >= 60) {
                    $cga = 1;
                    $torso_function_status = "生活基本自理";
                    break;
                }
                if ($score_total >= 20 && $score_total <= 59) {
                    $cga = 2;
                    $torso_function_status = "生活需要帮助";
                    break;
                }
                if ($score_total >= 0 && $score_total <= 20) {
                    $cga = 3;
                    $torso_function_status = "生活完全需要依赖";
                    break;
                }
                break;
        }

        //各项分数存入session
        $request->session()->put(session('user_id') . '_' . $request->table . '_scores', $score_total);
        $request->session()->put(session('user_id') . '_' . 'cga', session(session('user_id') . '_' . 'cga') + $cga);

        //更新用户信息表总分
        $score_status = $score->where('id',$request->user_id)->where('trunk_disease_id','<>',null)->first();
        $cga = session(session('user_id') . '_' . 'cga');

        if ($cga >= 0 && $cga <= 6) {
            $class = '健康 I 级';
        } elseif ($cga >= 7 && $cga <= 12) {
            $class = '健康 II 级';
        } else {
            $class = '健康 III 级';
        }

        if ($score_status && $cga) {
            $user = $user->where('id', session('user_id'));
            $user->update(['cga' => $cga, 'class' => $class]);
            return redirect()->route('admin');
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
