<?php

namespace App\Http\Controllers;

use App\Models\RProfile;
use App\Http\Requests\StoreRProfileRequest;
use App\Http\Requests\UpdateRProfileRequest;

class RProfileController extends Controller
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
     * @param  \App\Http\Requests\StoreRProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RProfile  $rProfile
     * @return \Illuminate\Http\Response
     */
    public function show(RProfile $rProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RProfile  $rProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(RProfile $rProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRProfileRequest  $request
     * @param  \App\Models\RProfile  $rProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRProfileRequest $request, RProfile $rProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RProfile  $rProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(RProfile $rProfile)
    {
        //
    }
}
