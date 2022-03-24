<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Config
 */
Route::get('config',"ConfigController")->name('config');

/**
 * Users
 */
Route::group([
    'prefix' => 'users',
    'as' => 'users.',
],function(){
    Route::post('',"UserController@store")->name('store');
    Route::put('{userId}',"UserController@update")->name('update');
});

/**
 * Schedules
 */
Route::group([
    'prefix' => 'schedules',
    'as' => 'schedules.',
    'middleware' => 'auth:api',
],function(){
    Route::get('',"ScheduleController@index")->name('index');
    Route::post('',"ScheduleController@store")->name('store');
    Route::put('{scheduleId}',"ScheduleController@update")->name('update');
    Route::delete('{scheduleId}',"ScheduleController@destroy")->name('destroy');
});

/**
 * Trainings
 */
Route::group([
    'prefix' => 'trainings',
    'as' => 'trainings.',
    'middleware' => 'auth:api',
],function(){
    Route::get('',"TrainingController@index")->name('index');
    Route::post('',"TrainingController@store")->name('store');
});

/**
 * Rankings
 */
Route::group([
    'prefix' => 'rankings',
    'as' => 'rankings.',
    'middleware' => 'auth:api',
],function(){
    Route::get('',"RankingController@index")->name('index');
});
