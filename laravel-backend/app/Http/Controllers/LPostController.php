<?php

namespace App\Http\Controllers;

use App\Models\LPost;
use App\Models\LCategory;
use App\Models\LPickup;
use App\Models\LSidebar;
use App\Http\Requests\StoreLPostRequest;
use App\Http\Requests\UpdateLPostRequest;
use App\Models\LSeries;
use App\Models\User;

class LPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        //
        $categories = LCategory::where('slug', $category)->first();
        if ($categories->depth == 0) {
            $category_array = LCategory::select('id')->where('parent_slug', $category);
            $posts = LPost::with(['user'=>function ($query) {
                $query->with('LProfile');
            }])->whereIn('l_category_id', $category_array)->orWhere('l_category_id', $categories->id);
        } else {
            $posts = LPost::where('l_category_id', $categories->id);
        }
        $posts = $posts->with('LCategory')->get()->makeHidden(['discription','sub_title','content']);
        //それぞれを配列に入れる
        $allarray = [
            'posts' => $posts,
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
        $parents = LCategory::where('depth', 0)->select('id', 'name', 'slug')->get();
        $categories = [];
        foreach ($parents as $parent) {
            $children = LCategory::where('parent_slug', $parent->slug)->select('id', 'name')->get()->toArray();
            $array = [
                'id' => $parent->id,
                'name' => $parent->name,
                'child_category' => $children
            ];
            array_unshift($array['child_category'], array('id'=>$parent->id,'name'=>'子カテゴリ無'));
            array_push($categories, $array);
        }
        $series = LSeries::get();
        $allarray=[
            'category'=>$categories,
            'series'=>$series
        ];
        return $this->jsonResponse($allarray);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLPostRequest $request)
    {
        //
        $l_post = LPost::create([
            'user_id' => $request->user_id,
            'l_category_id' => $request->l_category_id,
            'l_series_id' => $request->l_series_id,
            'title' => $request->title,
            'thumbs' => $request->thumbs,
            'mv' => $request->mv,
            'sub_title' => $request->sub_title,
            'discription' => $request->discription,
            'content' => $request->content,
            'state' => $request->state,
        ]);
        return $this->jsonResponse($l_post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LPost  $lPost
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $posts = LPost::with(['user'=>function ($query) {
            $query->with(['LProfile']);
        }])->with('LCategory')->find($id)->makeVisible(['discription','sub_title','content']);
        $seriesArray = [
            'series_info' => LSeries::find($posts->l_series_id),
            'prev_post' => LPost::where('l_series_id', $posts->l_series_id)->where('id', '<', $posts->id)->orderBy('id', 'desc')->first(),
            'next_post' => LPost::where('l_series_id', $posts->l_series_id)->where('id', '>', $posts->id)->orderBy('id', 'asc')->first(),
        ];

        //それぞれを配列に入れる
        $allarray = [
            'posts' => $posts,
            'series' => $seriesArray,
        ];

        $allarray = \Commons::LCommons($allarray);
        return $this->jsonResponse($allarray);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LPost  $lPost
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts = LPost::with(['user'=>function ($query) {
            $query->with(['LProfile']);
        }])->with('LCategory')->with('LSeries')->find($id)->makeVisible(['discription','sub_title','content']);
        $allarray = [
            'posts' => $posts,
        ];
        return $this->jsonResponse($allarray);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLPostRequest  $request
     * @param  \App\Models\LPost  $lPost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLPostRequest $request, LPost $lPost)
    {
        //
        $l_post = LPost::find($request->id);
        $l_post->update([
            'user_id' => $request->user_id,
            'l_category_id' => $request->l_category_id,
            'l_series_id' => $request->l_series_id,
            'title' => $request->title,
            'thumbs' => $request->thumbs,
            'mv' => $request->mv,
            'sub_title' => $request->sub_title,
            'discription' => $request->discription,
            'content' => $request->content,
            'state' => $request->state,
        ]);
        return $this->jsonResponse($l_post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LPost  $lPost
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $l_post = LPost::find($id);
        $l_post->delete();
        return $this->jsonResponse($l_post);
    }
}
