<?php

use Illuminate\Http\Request;

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

Route::post('/createTodo', 'TodoController@createTodo');

Route::get('/getTodos', 'TodoController@getTodos');

Route::delete('/deleteTodo/{id}', 'TodoController@deleteTodo');

Route::put('/updateTodo', 'TodoController@updateTodo');

Route::put('/markAsDone/{id}', 'TodoController@markAsDone');
