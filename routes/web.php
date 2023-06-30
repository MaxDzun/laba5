<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\MainController@about');

Route::get('/places',[MainController::class, 'all_places']);

Route::get('/places/{id}',[MainController::class, 'one_place'])->name('one-place');

Route::get('/airs',[MainController::class, 'all_airs']);

Route::get('/airs/{id}',[MainController::class, 'one_air'])->name('one-air');

Route::get('/seasons',[MainController::class, 'all_seasons']);

Route::get('/seasons/{id}',[MainController::class, 'one_season'])->name('one-season');

//Route::get('/seasons','App\Http\Controllers\MainController@seasons');
//Route::get('/airs','App\Http\Controllers\MainController@airs');


Route::get('/review','App\Http\Controllers\MainController@review')->name('review');
Route::post('/review/check','App\Http\Controllers\MainController@review_check');
//Route::get('/user/{id}/{name}',function ($id, $name){
//    return 'ID: '.$id.'. Name: '.$name;
//});
