<?php

namespace App\Http\Controllers;

use App\Models\RPickup;
use App\Http\Requests\StoreRPickupRequest;
use App\Http\Requests\UpdateRPickupRequest;

class RPickupController extends Controller
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
     * @param  \App\Http\Requests\StoreRPickupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRPickupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RPickup  $rPickup
     * @return \Illuminate\Http\Response
     */
    public function show(RPickup $rPickup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RPickup  $rPickup
     * @return \Illuminate\Http\Response
     */
    public function edit(RPickup $rPickup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRPickupRequest  $request
     * @param  \App\Models\RPickup  $rPickup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRPickupRequest $request, RPickup $rPickup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RPickup  $rPickup
     * @return \Illuminate\Http\Response
     */
    public function destroy(RPickup $rPickup)
    {
        //
    }
}
