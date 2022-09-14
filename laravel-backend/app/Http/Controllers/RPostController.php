<?php

namespace App\Http\Controllers;

use App\Models\RPost;
use App\Http\Requests\StoreRPostRequest;
use App\Http\Requests\UpdateRPostRequest;

class RPostController extends Controller
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
     * @param  \App\Http\Requests\StoreRPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRPostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RPost  $rPost
     * @return \Illuminate\Http\Response
     */
    public function show(RPost $rPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RPost  $rPost
     * @return \Illuminate\Http\Response
     */
    public function edit(RPost $rPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRPostRequest  $request
     * @param  \App\Models\RPost  $rPost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRPostRequest $request, RPost $rPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RPost  $rPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(RPost $rPost)
    {
        //
    }
}
