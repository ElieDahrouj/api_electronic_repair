<?php

namespace App\Http\Controllers;

use App\Models\CategoryEshop;
use Illuminate\Http\Request;

class CategoryEshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['data' => CategoryEshop::all()]);
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
     * @param \App\Models\CategoryEshop $categoryEshop
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(CategoryEshop $categoryEshop, $id)
    {
        $getOneCategoryEshop =  CategoryEshop::with('equipment')
            ->where([['id', $id]])
            ->get();

        if (count($getOneCategoryEshop) === 0){
            return response()->json(['errors'=>"Not Found"],404);
        }

        return response()->json(['data'=> $getOneCategoryEshop]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryEshop  $categoryEshop
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryEshop $categoryEshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryEshop  $categoryEshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryEshop $categoryEshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryEshop  $categoryEshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryEshop $categoryEshop)
    {
        //
    }
}
