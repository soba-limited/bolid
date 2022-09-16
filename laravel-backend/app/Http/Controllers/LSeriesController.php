<?php

namespace App\Http\Controllers;

use App\Models\LSeries;
use App\Http\Requests\StoreLSeriesRequest;
use App\Http\Requests\UpdateLSeriesRequest;

class LSeriesController extends Controller
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
     * @param  \App\Http\Requests\StoreLSeriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LSeries  $lSeries
     * @return \Illuminate\Http\Response
     */
    public function show(LSeries $lSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LSeries  $lSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(LSeries $lSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLSeriesRequest  $request
     * @param  \App\Models\LSeries  $lSeries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLSeriesRequest $request, LSeries $lSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LSeries  $lSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(LSeries $lSeries)
    {
        //
    }
}
