<?php

/*
共通読み込み事項
*/

namespace App\Libs;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Facade;

use \App\Models\LSidebar;
use \App\Models\LPickup;
use \App\Models\LCategory;

class Commons extends Facade
{
    public static function LCommons($allarray)
    {
        $side = LSidebar::all();
        $allarray = array_merge($allarray, array('sidebars'=>$side));
        $pickup = LPickup::with(['LPost'=>function ($query) {
            $query->with(['user'=>function ($query) {
                $query->with('LProfile');
            }]);
        }])->inRandomOrder()->limit(5)->get();
        $allarray = array_merge($allarray, array('pickups'=>$pickup));
        return $allarray;
    }

    public static function LPost_Category($category)
    {
        $return = LCategory::with('LPost')->where('slug', $category)->orWhere('parent_slug', $category)->get();
        return $return;
    }
}
