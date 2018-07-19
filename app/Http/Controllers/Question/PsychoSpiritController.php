<?php

namespace App\Http\Controllers\Question;

use App\Model\PsychoSpirit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PsychoSpiritController extends Controller
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
        $questions = new PsychoSpirit;
        $questions->question = $request->question;
        dd($questions->save());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\PsychoSpirit  $psychoSpirit
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PsychoSpirit $psychoSpirit)
    {
        //
        if ($request->session()->has('user')) {

            return view('questions.psycho')
                ->with('questions', $psychoSpirit->all()) //paginate(1)
                ->with('category', '心理精神问题')
                ->with('table','psycho_spirit');
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\PsychoSpirit  $psychoSpirit
     * @return \Illuminate\Http\Response
     */
    public function edit(PsychoSpirit $psychoSpirit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\PsychoSpirit  $psychoSpirit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PsychoSpirit $psychoSpirit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\PsychoSpirit  $psychoSpirit
     * @return \Illuminate\Http\Response
     */
    public function destroy(PsychoSpirit $psychoSpirit)
    {
        //
    }
}
