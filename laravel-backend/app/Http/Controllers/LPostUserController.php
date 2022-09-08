<?php

namespace App\Http\Controllers;

use App\Models\LPostUser;
use App\Http\Requests\StoreLPostUserRequest;
use App\Http\Requests\UpdateLPostUserRequest;

class LPostUserController extends Controller
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
     * @param  \App\Http\Requests\StoreLPostUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLPostUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LPostUser  $lPostUser
     * @return \Illuminate\Http\Response
     */
    public function show(LPostUser $lPostUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LPostUser  $lPostUser
     * @return \Illuminate\Http\Response
     */
    public function edit(LPostUser $lPostUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLPostUserRequest  $request
     * @param  \App\Models\LPostUser  $lPostUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLPostUserRequest $request, LPostUser $lPostUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LPostUser  $lPostUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(LPostUser $lPostUser)
    {
        //
    }
}
