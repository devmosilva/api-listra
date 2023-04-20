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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group([
    'prefix' => '/todo',
    'as' => 'todo.',
], function () {
    Route::post('/create', 'TodoController@create');
    Route::get('/index', 'TodoController@index');
    Route::get('/teste',  function (Request $request) {
        return response()->json('é', 200, [], JSON_UNESCAPED_UNICODE);
    });
    Route::put('/update/{id}', 'TodoController@update');
    Route::delete('/delete/{id}', 'TodoController@delete');
    Route::put('/updateStatus/{id}', 'TodoController@updateStatus');
});
