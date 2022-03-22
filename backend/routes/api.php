<?php

use Illuminate\Http\Request;
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

Route::group([
    'prefix' => 'users',
    'as' => 'users.',
],function(){
    Route::post('',"UserController@store")->name('store');
    Route::put('{userId}',"UserController@update")->name('update');
});

Route::group([
    'prefix' => 'schedules',
    'as' => 'schedules.',
//    'middleware' => 'auth:sanctum',
],function(){
    Route::get('',"ScheduleController@index")->name('index');
    Route::post('',"ScheduleController@store")->name('store');
    Route::put('{scheduleId}',"ScheduleController@update")->name('update');
    Route::delete('{scheduleId}',"ScheduleController@destroy")->name('destroy');
});
