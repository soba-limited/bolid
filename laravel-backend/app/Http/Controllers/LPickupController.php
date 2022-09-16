<?php

namespace App\Http\Controllers;

use App\Models\LPickup;
use App\Http\Requests\StoreLPickupRequest;
use App\Http\Requests\UpdateLPickupRequest;

class LPickupController extends Controller
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
     * @param  \App\Http\Requests\StoreLPickupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLPickupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LPickup  $lPickup
     * @return \Illuminate\Http\Response
     */
    public function show(LPickup $lPickup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LPickup  $lPickup
     * @return \Illuminate\Http\Response
     */
    public function edit(LPickup $lPickup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLPickupRequest  $request
     * @param  \App\Models\LPickup  $lPickup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLPickupRequest $request, LPickup $lPickup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LPickup  $lPickup
     * @return \Illuminate\Http\Response
     */
    public function destroy(LPickup $lPickup)
    {
        //
    }
}
