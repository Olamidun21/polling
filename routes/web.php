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

Route::get('/', function () {
    return view('welcome');
});

Route::get('getpuresult','pollingController@getpuresult');
Route::post('getlgaresltbypu','pollingController@getlgaresltbypu');
Route::post('getlgabystate','pollingController@getlgabystate');
Route::get('getalllga','pollingController@getalllga');