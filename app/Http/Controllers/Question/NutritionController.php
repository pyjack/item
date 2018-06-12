<?php

namespace App\Http\Controllers\Question;

use App\Http\Controllers\Controller;
use App\Model\Nutrition;
use Illuminate\Http\Request;

class NutritionController extends Controller
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
        $questions = new Nutrition;
        $questions->question = $request->question;
//        dd($questions->save());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Nutrition $nutrition
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //判断session里面是否有值(用户是否登陆)
        if ($request->session()->has('user')) {

            $nutrition = Nutrition::paginate(8);
            return view('questions.nutrition')
                ->with('questions', $nutrition)
                ->with('category', '营养问题');
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Nutrition $nutrition
     * @return \Illuminate\Http\Response
     */
    public function edit(Nutrition $nutrition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Nutrition $nutrition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nutrition $nutrition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Nutrition $nutrition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nutrition $nutrition)
    {
        //
    }
}
