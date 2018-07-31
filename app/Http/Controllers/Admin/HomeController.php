<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Model\CognitiveAbility;
use App\Model\FallRisk;
use App\Model\Nutrition;
use App\Model\PsychoSpirit;
use App\Model\Score;
use App\Model\TorsoFunction;
use App\Model\TrunkDisease;
use App\Model\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user)
    {
        //判断session里面是否有值(用户是否登陆)
        if ($request->session()->has('admin')) {
            //登录后查询用户信息
            $data = $user->paginate(13);
            return view('admin.home')->with('data', $data);
        }
        return redirect()->route('admin.login');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }


    /**
     * @param Request $request
     * @param Score $score
     * @param $id
     * @param TrunkDisease $trunkDisease
     * @param TorsoFunction $torsoFunction
     * @param CognitiveAbility $cognitiveAbility
     * @param PsychoSpirit $psychoSpirit
     * @param FallRisk $fallRisk
     * @param Nutrition $nutrition
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function query(Score $score, $id, User $user)
    {
        $psycho = $score->where('user_id', $id)->where('psycho_spirit_id', '!=', null)->sum('scores');
        $nutrition = $score->where('user_id', $id)->where('nutrition_id', '<>', null)->sum('scores');
        $fall = $score->where('user_id', $id)->where('fall_risk_id', '<>', null)->sum('scores');
        $cognitive = $score->where('user_id', $id)->where('cognitive_ability_id', '<>', null)->sum('scores');
        $torso = $score->where('user_id', $id)->where('torso_function_id', '<>', null)->sum('scores');
        $trunk = $score->where('user_id', $id)->where('trunk_disease_id', '<>', null)->sum('scores');

        $questions = [
            '心理精神问题' => $psycho,
            '躯干功能问题' => $torso,
            '认知能力问题' => $cognitive,
            '跌倒风险问题' => $fall,
            '营养问题' => $nutrition,
            '躯干疾病问题' => $trunk
        ];

        $user = $user->where('id',$id)->first();
        $admin = session('admin');

        return view('admin.detail',
            [
            'data' => $questions,
            'user_id' => $id,
            'user' => $user,
            'admin' => $admin
        ]);
    }


    /**
     * @param $id
     * @param $type
     * @param TorsoFunction $torsoFunction
     * @param CognitiveAbility $cognitiveAbility
     * @param PsychoSpirit $psychoSpirit
     * @param FallRisk $fallRisk
     * @param Nutrition $nutrition
     */
    public function detail(
        $id,
        $type,
        Score $score,
        TorsoFunction $torsoFunction,
        CognitiveAbility $cognitiveAbility,
        PsychoSpirit $psychoSpirit,
        FallRisk $fallRisk,
        Nutrition $nutrition,
        TrunkDisease $trunkDisease
    )
    {
        switch ($type) {
            case '心理精神问题':
                {
                    return view('admin.scores')
                        ->with('data', $psychoSpirit->pluck('questions','id'));
                }
                break;
            case '躯干功能问题':
                {
                    return view('admin.scores')
                        ->with('data', $torsoFunction->pluck('questions','id'));
                }
                break;
            case '认知能力问题':
                {
                    return view('admin.scores')
                        ->with('data', $cognitiveAbility->pluck('questions','id'));
                }
                break;
            case '跌倒风险问题':
                {
                    return view('admin.scores')
                        ->with('data', $fallRisk->pluck('questions','id'));
                }
                break;
            case '营养问题':
                {
                    return view('admin.scores')
                        ->with('data', $nutrition->pluck('questions','id'));
                }
                break;
            case '躯干疾病问题':
                {
                    $score = $score->where('user_id', $id)
                        ->where('trunk_disease_id', '<>', null)
                        ->where('scores', '<>', null)
                        ->get();

                    if(isset($score)){
                        return view('admin.scores')
                            ->with('data', $trunkDisease
                                ->pluck('questions','id'));
                    } else {
                        return view('questions.trunk')
                            ->with('questions', $trunkDisease->all())
                            ->with('category', '躯干疾病问题')
                            ->with('table','trunk_disease')
                            ->with('id', $id);
                    }
                }
                break;
        }
        return view('404');
    }
}