<?php

namespace App\Http\Controllers;

use App\Models\RPostUser;
use App\Http\Requests\StoreRPostUserRequest;
use App\Http\Requests\UpdateRPostUserRequest;

class RPostUserController extends Controller
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
     * @param  \App\Http\Requests\StoreRPostUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRPostUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RPostUser  $rPostUser
     * @return \Illuminate\Http\Response
     */
    public function show(RPostUser $rPostUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RPostUser  $rPostUser
     * @return \Illuminate\Http\Response
     */
    public function edit(RPostUser $rPostUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRPostUserRequest  $request
     * @param  \App\Models\RPostUser  $rPostUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRPostUserRequest $request, RPostUser $rPostUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RPostUser  $rPostUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RPostUser $rPostUser)
    {
        //
    }
}
