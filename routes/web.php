<?php

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
//GET
//POST
//PUT
//DELETE
Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{user}/{id}', function($user, $id){
    return "Hello there ".$user." you are Viewing the user page". $id;
});
Route::get('/users', function(){
    $name = "John Doe ";
    return view('user')->with('user', $name);
});

Auth::routes();
Route::resource('/posts','PostsController');
Route::get('/home', 'HomeController@index')->name('home');
