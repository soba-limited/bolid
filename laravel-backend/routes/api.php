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

//liondollコントローラー
Route::get('/liondoll', [RIndexController::class,'index'])->name('r_index');
Route::get('/liondoll/post/{category}', [RPostController::class,'index'])->name('r_post.index');
Route::get('/liondoll/post/{id}', [RPostController::class,'show'])->name('r_post.show');
Route::get('/liondoll/presents', [RPresentController::class,'index'])->name('r_present.index');
Route::get('/liondoll/presents/{id}', [RPresentController::class,'show'])->name('r_present.show');
Route::get('/liondoll/series/{id}', [RSerieController::class,'show'])->name('r_series.show');

//liondoll一般ユーザーコントローラー

Route::post('/liondoll/present/{id}/app', [RPresentController::class,'app'])->name('r_present.app');
Route::get('/liondoll/mypage', [RProfileController::class,'show'])->name('r_profile.show');
Route::get('/liondoll/mypage/create', [RProfileController::class,'create'])->name('r_profile.create');
Route::post('/liondoll/mypage/store', [RProfileController::class,'store'])->name('r_profile.store');
Route::get('/liondoll/mypage/edit', [RProfileController::class,'edit'])->name('r_profile.edit');
Route::post('/liondoll/mypage/update', [RProfileController::class,'update'])->name('r_profile.update');
Route::get('/liondoll/mypage/bookmark', [RProfileController::class,'bookmark'])->name('r_profile.bookmark');
Route::post('/liondoll/post/{id}/bookmark', [RPostController::class,'bookmark'])->name('r_post.bookmark');
Route::delete('/liondoll/post/{id}/bookmark_remove', [RPostController::class,'bookmark_remove'])->name('r_post.bookmark_remove');

//liondoll記事投稿者コントローラー

Route::get('/liondoll/post/create', [RPostController::class,'create'])->name('r_post.create');
Route::post('/liondoll/post/store', [RPostController::class,'store'])->name('r_post.store');
Route::get('/liondoll/post/{id}/edit', [RPostController::class,'edit'])->name('r_post.edit');
Route::post('/liondoll/post/{id}/update', [RPostController::class,'update'])->name('r_post.update');
Route::delete('/liondoll/post/{id}/delete', [RPostController::class,'delete'])->name('r_post.delete');
Route::get('/liondoll/series/create', [RSeriesController::class,'create'])->name('r_series.create');
Route::post('/liondoll/series/store', [RSeriesController::class,'store'])->name('r_series.store');
Route::get('/liondoll/series/{id}/edit', [RSeriesController::class,'edit'])->name('r_series.edit');
Route::post('/liondoll/series/{id}/update', [RSeriesController::class,'update'])->name('r_series.update');
Route::delete('/liondoll/series/{id}/delete', [RSeriesController::class,'delete'])->name('r_series.delete');

//liondoll管理者コントローラー

Route::get('/liondoll/admin/present', [RPresent::class,'admin_index'])->name('r_present.admin_index');
Route::get('/liondoll/admin/present/{id}', [RPresent::class,'admin_show'])->name('r_present.admin_show');
Route::get('/liondoll/present/create', [RPresentController::class,'create'])->name('r_present.create');
Route::post('/liondoll/present/store', [RPresentController::class,'store'])->name('r_present.store');
Route::get('/liondoll/present/{id}/edit', [RPresentController::class,'edit'])->name('r_present.edit');
Route::post('/liondoll/present/{id}/update', [RPresentController::class,'update'])->name('r_present.update');
Route::delete('/liondoll/present/{id}/delete', [RPresentController::class,'delete'])->name('r_present.delete');