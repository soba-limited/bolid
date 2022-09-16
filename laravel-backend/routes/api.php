<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RCategoryController;
use App\Http\Controllers\RIndexController;
use App\Http\Controllers\RPickupController;
use App\Http\Controllers\RPostController;
use App\Http\Controllers\RPresentController;
use App\Http\Controllers\RProfileController;
use App\Http\Controllers\RSerieController;
use App\Http\Controllers\RSeriesController;
use App\Models\RProfile;

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

//riondorコントローラー
Route::get('/riondor', [RIndexController::class,'index'])->name('r_index');
Route::get('/riondor/post/{category}', [RPostController::class,'index'])->name('r_post.index');
Route::get('/riondor/post/{id}', [RPostController::class,'show'])->name('r_post.show');
Route::get('/riondor/presents', [RPresentController::class,'index'])->name('r_present.index');
Route::get('/riondor/presents/{id}', [RPresentController::class,'show'])->name('r_present.show');
Route::get('/riondor/series/{id}', [RSerieController::class,'show'])->name('r_series.show');

//riondor一般ユーザーコントローラー

Route::post('/riondor/present/{id}/app', [RPresentController::class,'app'])->name('r_present.app');
Route::get('/riondor/mypage', [RProfileController::class,'show'])->name('r_profile.show');
Route::get('/riondor/mypage/create', [RProfileController::class,'create'])->name('r_profile.create');
Route::post('/riondor/mypage/store', [RProfileController::class,'store'])->name('r_profile.store');
Route::get('/riondor/mypage/edit', [RProfileController::class,'edit'])->name('r_profile.edit');
Route::post('/riondor/mypage/update', [RProfileController::class,'update'])->name('r_profile.update');
Route::get('/riondor/mypage/bookmark', [RProfileController::class,'bookmark'])->name('r_profile.bookmark');
Route::post('/riondor/post/{id}/bookmark', [RPostController::class,'bookmark'])->name('r_post.bookmark');
Route::delete('/riondor/post/{id}/bookmark_remove', [RPostController::class,'bookmark_remove'])->name('r_post.bookmark_remove');

//riondor記事投稿者コントローラー

Route::get('/riondor/post/create', [RPostController::class,'create'])->name('r_post.create');
Route::post('/riondor/post/store', [RPostController::class,'store'])->name('r_post.store');
Route::get('/riondor/post/{id}/edit', [RPostController::class,'edit'])->name('r_post.edit');
Route::post('/riondor/post/{id}/update', [RPostController::class,'update'])->name('r_post.update');
Route::delete('/riondor/post/{id}/delete', [RPostController::class,'delete'])->name('r_post.delete');
Route::get('/riondor/series/create', [RSeriesController::class,'create'])->name('r_series.create');
Route::post('/riondor/series/store', [RSeriesController::class,'store'])->name('r_series.store');
Route::get('/riondor/series/{id}/edit', [RSeriesController::class,'edit'])->name('r_series.edit');
Route::post('/riondor/series/{id}/update', [RSeriesController::class,'update'])->name('r_series.update');
Route::delete('/riondor/series/{id}/delete', [RSeriesController::class,'delete'])->name('r_series.delete');

//riondor管理者コントローラー

Route::get('/riondor/admin/present', [RPresent::class,'admin_index'])->name('r_present.admin_index');
Route::get('/riondor/admin/present/{id}', [RPresent::class,'admin_show'])->name('r_present.admin_show');
Route::get('/riondor/present/create', [RPresentController::class,'create'])->name('r_present.create');
Route::post('/riondor/present/store', [RPresentController::class,'store'])->name('r_present.store');
Route::get('/riondor/present/{id}/edit', [RPresentController::class,'edit'])->name('r_present.edit');
Route::post('/riondor/present/{id}/update', [RPresentController::class,'update'])->name('r_present.update');
Route::delete('/riondor/present/{id}/delete', [RPresentController::class,'delete'])->name('r_present.delete');