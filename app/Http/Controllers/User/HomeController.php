<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\CognitiveAbility;
use App\Model\FallRisk;
use App\Model\Nutrition;
use App\Model\PsychoSpirit;
use App\Model\TorsoFunction;
use App\Model\TrunkDisease;
use App\Model\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        Request $request,
        TrunkDisease $trunkDisease,
        TorsoFunction $torsoFunction,
        CognitiveAbility $cognitiveAbility,
        PsychoSpirit $psychoSpirit,
        FallRisk $fallRisk,
        Nutrition $nutrition
    )
    {
        //判断session里面是否有值(用户是否登陆)
        if ($request->session()->has('user')) {
            return view('questions.home')
                ->with('trunkDisease', $trunkDisease->paginate(1))
                ->with('torsoFunction', $torsoFunction->paginate(1))
                ->with('cognitiveAbility', $cognitiveAbility->paginate(1))
                ->with('fallRisk', $fallRisk->paginate(1))
                ->with('nutrition', $nutrition->paginate(1))
                ->with('psychoSpirit', $psychoSpirit->paginate(1))
                ->with('trunk', '躯干疾病问题')
                ->with('torso', '躯干功能问题')
                ->with('cognitive', '认知能力问题')
                ->with('fall', '跌倒风险问题')
                ->with('nutritions', '营养问题')
                ->with('psycho', '心理精神问题');
        }
        return redirect('login.html');
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
     * @param  \App\Model\User $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
