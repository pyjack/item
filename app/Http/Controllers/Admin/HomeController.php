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
    public function query(
        Request $request,
        Score $score, $id,
        trunkDisease $trunkDisease,
        TorsoFunction $torsoFunction,
        CognitiveAbility $cognitiveAbility,
        PsychoSpirit $psychoSpirit,
        FallRisk $fallRisk,
        Nutrition $nutrition
    )
    {
        $data = $score->where('user_id', $id)
            ->where('psycho_spirit_id', '<>', null);
//            ->lists('scores');
//        dd($data);
        $questions = [
            'psycho' => '心理精神问题',
            'torso' => '躯干功能问题',
            'cognitive' => '认知能力问题',
            'fall' => '跌倒风险问题',
            'nutritions' => '营养问题',
            'trunk' => '躯干疾病问题'
        ];
        return view('admin.detail', ['data' => $questions, 'user_id' => $id]);
//            ->with('data', $data)
//            ->with('trunkDisease', $trunkDisease->pluck('questions','id'))
//            ->with('torsoFunction', $torsoFunction->pluck('questions','id'))
//            ->with('cognitiveAbility', $cognitiveAbility->pluck('questions','id'))
//            ->with('fallRisk', $fallRisk->pluck('questions','id'))
//            ->with('nutrition', $nutrition->pluck('questions','id'))
//            ->with('psychoSpirit', $psychoSpirit->pluck('questions','id'))
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
        TorsoFunction $torsoFunction,
        CognitiveAbility $cognitiveAbility,
        PsychoSpirit $psychoSpirit,
        FallRisk $fallRisk,
        Nutrition $nutrition
    )
    {
        switch ($type) {
            case 'psycho':
                {
                    return view('admin.psycho')
                        ->with('data', $psychoSpirit->pluck('questions','id'));
                }
                break;
        }
    }
}