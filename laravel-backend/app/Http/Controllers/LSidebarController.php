<?php

namespace App\Http\Controllers;

use App\Models\LSidebar;
use App\Http\Requests\StoreLSidebarRequest;
use App\Http\Requests\UpdateLSidebarRequest;

class LSidebarController extends Controller
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
     * @param  \App\Http\Requests\StoreLSidebarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLSidebarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LSidebar  $lSidebar
     * @return \Illuminate\Http\Response
     */
    public function show(LSidebar $lSidebar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LSidebar  $lSidebar
     * @return \Illuminate\Http\Response
     */
    public function edit(LSidebar $lSidebar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLSidebarRequest  $request
     * @param  \App\Models\LSidebar  $lSidebar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLSidebarRequest $request, LSidebar $lSidebar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LSidebar  $lSidebar
     * @return \Illuminate\Http\Response
     */
    public function destroy(LSidebar $lSidebar)
    {
        //
    }
}
