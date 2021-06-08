<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use Illuminate\Http\Request;

class ApplianceController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Appliance $appliance
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Appliance $appliance, $id): \Illuminate\Http\JsonResponse
    {
        $getOneAppliance =  Appliance::with('replacementTutorial')
            ->with('category')
            ->where([['id', $id]])
            ->get();

        if (count($getOneAppliance) === 0){
            return response()->json(['errors'=>"Not Found"],404);
        }

        return response()->json(['data'=> $getOneAppliance]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appliance  $appliance
     * @return \Illuminate\Http\Response
     */
    public function edit(Appliance $appliance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appliance  $appliance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appliance $appliance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appliance  $appliance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appliance $appliance)
    {
        //
    }
}
