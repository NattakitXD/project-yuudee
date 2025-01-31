<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::any('home' , 'App\Http\Controllers\HomeController@home');
Route::any('hometest' , 'App\Http\Controllers\HomeController@hometest');
Route::any('test' , 'App\Http\Controllers\HomeController@test');
Route::any('non' , 'App\Http\Controllers\HomeController@non');

// earth
Route::any('sidebar' , 'App\Http\Controllers\HomeController@sidebar');
Route::any('property' , 'App\Http\Controllers\HomeController@property');
Route::any('trialrun' , 'App\Http\Controllers\HomeController@trialrun');


// Route::any('slider' , 'App\Http\Controllers\HomeController@slider');
