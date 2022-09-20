<?php

namespace App\Http\Controllers;

use App\Models\LCategory;
use App\Models\LPickup;
use App\Models\LPost;
use App\Models\LPresent;
use App\Models\LSidebar;
use App\Models\User;

class LIndexController extends Controller
{
    //
    public function index()
    {
        //
        $fashionID = LCategory::where('slug', 'fashion')->orWhere('parent_slug', 'fashion')->get();
        $fashionIdArray = [];
        foreach ($fashionID as $IDs) {
            array_push($fashionIdArray, $IDs->id);
        }
        $fashion = LPost::whereIn('l_category_id', $fashionIdArray)->limit(10)->get();

        $beautyID = LCategory::where('slug', 'beauty')->orWhere('parent_slug', 'beauty')->get();
        $beautyIdArray = [];
        foreach ($beautyID as $IDs) {
            array_push($beautyIdArray, $IDs->id);
        }
        $beauty = LPost::whereIn('l_category_id', $beautyIdArray)->limit(10)->get();

        $trendID = LCategory::where('slug', 'trend')->orWhere('parent_slug', 'trend')->get();
        $trendIdArray = [];
        foreach ($trendID as $IDs) {
            array_push($trendIdArray, $IDs->id);
        }
        $trend = LPost::whereIn('l_category_id', $trendIdArray)->limit(10)->get();

        $lifestyleID = LCategory::where('slug', 'lifestyle')->orWhere('parent_slug', 'lifestyle')->get();
        $lifestyleIdArray = [];
        foreach ($lifestyleID as $IDs) {
            array_push($lifestyleIdArray, $IDs->id);
        }
        $lifestyle = LPost::whereIn('l_category_id', $lifestyleIdArray)->limit(10)->get();

        $weddingID = LCategory::where('slug', 'wedding')->orWhere('parent_slug', 'wedding')->get();
        $weddingIdArray = [];
        foreach ($weddingID as $IDs) {
            array_push($weddingIdArray, $IDs->id);
        }
        $wedding = LPost::whereIn('l_category_id', $weddingIdArray)->limit(10)->get();

        $topleaderID = LCategory::where('slug', 'topleader')->orWhere('parent_slug', 'topleader')->get();
        $topleaderIdArray = [];
        foreach ($topleaderID as $IDs) {
            array_push($topleaderIdArray, $IDs->id);
        }
        $topleader = LPost::whereIn('l_category_id', $topleaderIdArray)->limit(10)->get();

        $fortuneID = LCategory::where('slug', 'fortune')->orWhere('parent_slug', 'fortune')->get();
        $fortuneIdArray = [];
        foreach ($fortuneID as $IDs) {
            array_push($fortuneIdArray, $IDs->id);
        }
        $fortune = LPost::whereIn('l_category_id', $fortuneIdArray)->limit(10)->get();

        $videoID = LCategory::where('slug', 'video')->orWhere('parent_slug', 'video')->get();
        $videoIdArray = [];
        foreach ($videoID as $IDs) {
            array_push($videoIdArray, $IDs->id);
        }
        $video = LPost::whereIn('l_category_id', $videoIdArray)->limit(10)->get();

        $present = LPresent::limit(5)->get();

        $sidebar = LSidebar::get();

        $pickup = LPickup::get();
        $pickupArray = [];
        foreach ($pickup as $single) {
            array_push($pickupArray, $single->LPost()->first());
        }

        //それぞれを配列に入れる
        $allarray = [
            'fashions' => $fashion,
            'beautys' => $beauty,
            'trends' => $trend,
            'lifestyles' => $lifestyle,
            'weddings' => $wedding,
            'topleaders' => $topleader,
            'fortunes' => $fortune,
            'videos' => $video,
            'presents' => $present,
            'sidebars' => $sidebar,
            'pickups' => $pickupArray,
        ];

        return $this->jsonResponse($allarray);
    }
}