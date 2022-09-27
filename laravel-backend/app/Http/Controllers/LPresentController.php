<?php

namespace App\Http\Controllers;

use App\Models\LPresent;
use App\Models\LSidebar;
use App\Models\LPickup;
use App\Http\Requests\StoreLPresentRequest;
use App\Http\Requests\UpdateLPresentRequest;

class LPresentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $presents = LPresent::get();

        //それぞれを配列に入れる
        $allarray = [
            'presents' => $presents,
        ];
        $allarray = \Commons::LCommons($allarray);
        return $this->jsonResponse($allarray);
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
     * @param  \App\Http\Requests\StoreLPresentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLPresentRequest $request)
    {
        //
        $l_post = LPresent::create([
            'title' => $request->title,
            'offer' => $request->offer,
            'limit' => $request->limit
        ]);
        $id = $l_post->id;
        $file_name = $request->file('thumbs')->getClientOriginalName();
        $request->file('thumbs')->storeAs('images/present/'.$id, $file_name, 'public');
        $thumbs = 'images/present/'.$id."/".$file_name;
        $l_post->thumbs = $thumbs;
        $l_post->save();
        return $this->jsonResponse($l_post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LPresent  $lPresent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $presents = LPresent::find($id);

        //それぞれを配列に入れる
        $allarray = [
            'presents' => $presents,
        ];
        $allarray = \Commons::LCommons($allarray);
        return $this->jsonResponse($allarray);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LPresent  $lPresent
     * @return \Illuminate\Http\Response
     */
    public function edit(LPresent $lPresent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLPresentRequest  $request
     * @param  \App\Models\LPresent  $lPresent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLPresentRequest $request, LPresent $lPresent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LPresent  $lPresent
     * @return \Illuminate\Http\Response
     */
    public function destroy(LPresent $lPresent)
    {
        //
    }

    public function app()
    {
    }
}