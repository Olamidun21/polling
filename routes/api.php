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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('getpuresult','pollingController@getpuresult');
Route::post('getlgaresltbypu','pollingController@getlgaresltbypu');
Route::post('getlgabystate','pollingController@getlgabystate');
Route::get('getalllga','pollingController@getalllga');
Route::get('getallstate','pollingController@getallstate');
Route::get('getallward','pollingController@getallward');
Route::get('getallpu','pollingController@getallpu');
Route::get('getallparties','pollingController@getallparties');
Route::get('getallpuresult','pollingController@getallpuresult');