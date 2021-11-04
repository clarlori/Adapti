<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsAdmimController;


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

//Route::get('/', function () {
   // return view('welcome');
//});

//Route::get('ola/{nome}', 'App\Http\Controllers\TestController@index');
//Route::get('nota', 'App\Http\Controllers\TestController@notas');
Route::get('admim/blog', 'App\Http\Controllers\PostsController@index');
//Route::get('/', 'App\Http\Controllers\PostsController@index');

Route::group(['prefix' => 'admim'], function(){

   Route::group(['prefix' => 'posts'], function(){


      Route::get('', ['as' => 'admim.posts.index', 'uses'=> 'App\Http\Controllers\PostsAdmimController@index']);
      Route::get('create', ['as' => 'admim.posts.create', 'uses'=>  'App\Http\Controllers\PostsAdmimController@create']);
      Route::post('store', ['as' => 'admim.posts.store', 'uses'=>  'App\Http\Controllers\PostsAdmimController@store']);Route::put('admim/posts/update/{id}', ['as' => 'admim.posts.update', 'uses'=>  'App\Http\Controllers\PostsAdmimController@update']);
      Route::get('destroy/{id}', ['as' => 'admim.posts.destroy', 'uses'=>  'App\Http\Controllers\PostsAdmimController@destroy']);
      Route::get('edit/{id}', [PostsAdmimController::class,'edit'])->name('admim.posts.edit');
      Route::get('edit/{id}', ['as' => 'admim.posts.edit', 'uses'=>  'App\Http\Controllers\PostsAdmimController@edit']);
   });

});




