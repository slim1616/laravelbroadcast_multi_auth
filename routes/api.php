<?php

use Illuminate\Http\Request;
use App\Http\Resources\UserResource as UserResource;
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
Route::post('register', 'Api\Auth\RegisterController@register');
Route::middleware('cors')->post('login', 'Api\Auth\LoginController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
    return new UserResource($request->user());
});
