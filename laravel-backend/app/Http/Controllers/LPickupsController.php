<?php

namespace App\Http\Controllers;

use App\Models\LPickups;
use App\Http\Requests\StoreLPickupsRequest;
use App\Http\Requests\UpdateLPickupsRequest;

class LPickupsController extends Controller
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
     * @param  \App\Http\Requests\StoreLPickupsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLPickupsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LPickups  $lPickups
     * @return \Illuminate\Http\Response
     */
    public function show(LPickups $lPickups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LPickups  $lPickups
     * @return \Illuminate\Http\Response
     */
    public function edit(LPickups $lPickups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLPickupsRequest  $request
     * @param  \App\Models\LPickups  $lPickups
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLPickupsRequest $request, LPickups $lPickups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LPickups  $lPickups
     * @return \Illuminate\Http\Response
     */
    public function destroy(LPickups $lPickups)
    {
        //
    }
}
