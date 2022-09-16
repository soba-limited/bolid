<?php

namespace App\Http\Controllers;

use App\Models\LProfile;
use App\Http\Requests\StoreLProfileRequest;
use App\Http\Requests\UpdateLProfileRequest;

class LProfileController extends Controller
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
     * @param  \App\Http\Requests\StoreLProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLProfileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LProfile  $lProfile
     * @return \Illuminate\Http\Response
     */
    public function show(LProfile $lProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LProfile  $lProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(LProfile $lProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLProfileRequest  $request
     * @param  \App\Models\LProfile  $lProfile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLProfileRequest $request, LProfile $lProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LProfile  $lProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(LProfile $lProfile)
    {
        //
    }
}
