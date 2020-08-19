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


Route::post('home','Api\chatController@chatbox');
Route::get('product','Api\chatController@sanPhamBanChay');
Route::get('newPro','Api\chatController@newPro');
Route::get('addCard/{id}','Api\chatController@addCard');
Route::get('getcart','Api\chatController@getCart');
Route::get('danhgia/{id}','Api\chatController@getElavate');

