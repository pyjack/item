<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Model\FallRisk;
use Illuminate\Http\Request;

class FallRiskController extends Controller
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
    public function store(Request $request)
    {
        //
        $questions = new FallRisk;
        $questions->question = $request->question;
        dd($questions->save());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\FallRisk $fallRisk
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, FallRisk $fallRisk)
    {
        if ($request->session()->has('user')) {

            return view('questions.fall')
                ->with('questions', $fallRisk->all())
                ->with('category', '跌倒风险问题')
                ->with('table', 'fall_risk');
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\FallRisk $fallRisk
     * @return \Illuminate\Http\Response
     */
    public function edit(FallRisk $fallRisk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\FallRisk $fallRisk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FallRisk $fallRisk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\FallRisk $fallRisk
     * @return \Illuminate\Http\Response
     */
    public function destroy(FallRisk $fallRisk)
    {
        //
    }
}
