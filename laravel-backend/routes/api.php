<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

//riondollコントローラー
Route::get('/riondoll', [\App\Http\Controllers\RIndexController::class,'index'])->name('r_index');
Route::get('/riondoll/post', [\App\Http\Controllers\RPostController::class,'index'])->name('r_post.index');
Route::get('/riondoll/post/{category}', [\App\Http\Controllers\RPostController::class,'category_index'])->name('r_post.category_index');
Route::get('/riondoll/post/{id}', [\App\Http\Controllers\RPostController::class,'show'])->name('r_post.show');
Route::get('/riondoll/presents', [\App\Http\Controllers\RPresentController::class,'index'])->name('r_present.index');
Route::get('/riondoll/presents/{id}', [\App\Http\Controllers\RPresentController::class,'show'])->name('r_present.show');
Route::get('/mypage/riondoll', [\App\Http\Controllers\RProfileController::class,'show'])->name('r_profile.show');
Route::get('/riondoll/series/{id}', [\App\Http\Controllers\RSerieController::class,'show'])->name('r_series.show');