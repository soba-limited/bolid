<?php

namespace App\Http\Controllers;

use App\Models\RSeries;
use App\Http\Requests\StoreRSeriesRequest;
use App\Http\Requests\UpdateRSeriesRequest;

class RSeriesController extends Controller
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
     * @param  \App\Http\Requests\StoreRSeriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RSeries  $rSeries
     * @return \Illuminate\Http\Response
     */
    public function show(RSeries $rSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RSeries  $rSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(RSeries $rSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRSeriesRequest  $request
     * @param  \App\Models\RSeries  $rSeries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRSeriesRequest $request, RSeries $rSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RSeries  $rSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(RSeries $rSeries)
    {
        //
    }
}
