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
//GET
//POST
//PUT
//DELETE
//get all the posts
Route::get('posts','Api\PostsApicController@index');
//add a post
Route::post('posts','Api\PostsApicController@store');
//get a single post
Route::get('post/{id}','Api\PostsApicController@show');
//update a single post
Route::put('post/{id}','Api\PostsApicController@store');
//delete sigle post
Route::delete('post/{id}','Api\PostsApicController@destoy');