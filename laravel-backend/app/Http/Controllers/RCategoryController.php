<?php

namespace App\Http\Controllers;

use App\Models\RCategory;
use App\Http\Requests\StoreRCategoryRequest;
use App\Http\Requests\UpdateRCategoryRequest;

class RCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreRCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RCategory  $rCategory
     * @return \Illuminate\Http\Response
     */
    public function show(RCategory $rCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RCategory  $rCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(RCategory $rCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRCategoryRequest  $request
     * @param  \App\Models\RCategory  $rCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRCategoryRequest $request, RCategory $rCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RCategory  $rCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(RCategory $rCategory)
    {
        //
    }
}
