<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

use App\Models\User;
use App\Http\Controllers\LIndexController;
use App\Http\Controllers\LPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    $test = User::where('id', 1)->get();
    return json_encode($test, JSON_PRETTY_PRINT);
});
*/

Route::get('/liondor', [LIndexController::class,'index'])->name('l_index');
Route::get('/liondor/post/{category}', [LPostController::class,'index'])->name('l_post.index');
Route::get('/liondor/post/show/{id}', [LPostController::class,'show'])->name('l_post.show');


require __DIR__.'/auth.php';