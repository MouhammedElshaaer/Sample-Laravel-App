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



// Route::get('/link1', function () {
//     return 'Hello world';
// });

// Route::get('/link2', function () {
//     return '<h1>hello world</h1>';
// });

// Route::get('/link3/{id}/{name}', function ($id,$name) {
//     return 'this is user: '.$name.' with an id: '.$id;
// });
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/notes','PagesController@notes');


Route::resource('posts','PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
