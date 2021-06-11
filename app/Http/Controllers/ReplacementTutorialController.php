<?php

namespace App\Http\Controllers;

use App\Models\ReplacementTutorial;
use Illuminate\Http\Request;

class ReplacementTutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['data' => ReplacementTutorial::all()->take(10)]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ReplacementTutorial $replacementTutorial
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(ReplacementTutorial $replacementTutorial, $id): \Illuminate\Http\JsonResponse
    {
        $getOneTutorial =  ReplacementTutorial::with('tutorialStep')
            ->with('tutorialStep.tutorialPicture')
            ->with('appliance')
            ->where([['id', $id]])
            ->get();

        if (count($getOneTutorial) === 0){
            return response()->json(['errors'=>"Not Found"],404);
        }

        return response()->json(['data'=> $getOneTutorial]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReplacementTutorial  $replacementTutorial
     * @return \Illuminate\Http\Response
     */
    public function edit(ReplacementTutorial $replacementTutorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReplacementTutorial  $replacementTutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReplacementTutorial $replacementTutorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReplacementTutorial  $replacementTutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReplacementTutorial $replacementTutorial)
    {
        //
    }
}
