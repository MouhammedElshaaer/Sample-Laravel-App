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


/*
	you can return simple text
 */
// Route::get('/link1', function () {
//     return 'Hello world';
// });


/*
	you can return a template
 */
// Route::get('/link2', function () {
//     return '<h1>hello world</h1>';
// });


/*
	this is dynamic routing
 */
// Route::get('/link3/{id}/{name}', function ($id,$name) {
//     return 'this is user: '.$name.' with an id: '.$id;
// });


/*
	you can return a view, a .blade file. But, remember that you should not return a view from the route,
	there should be a countroller that take care of that, just calling the specific function in the controller
	and the controller take the rest of work and return the view back. 
 */
// Route::get('/', function () {
//     return view('welcome');
// });
 

/*
	Named routes. you can use named routes to make it easier in maintainance. so, you create a name for you route 
	and in you view, instead of calling the route directly like that href="/route" we just use the route() function
	and make it href="{{route('/routeName')}}". so now if you change the route from "route" to "differentRoute", you
	won't have to change it in the view as long as you are using the route name.
 */
// Route::get('/route','PagesController@index')->name('routeName');
// so if you change this route to:
// Route::get('/differentRoute','PagesController@index')->name('routeName');
// your routes in the views still works and the route() function will take care of this change

/*
	Another syntax for named routes
 */
//Route::get('/route',[
//	'as' => 'routeName',
//	'uses' => 'PagesController@index'
//	]);


Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');
Route::get('/notes','PagesController@notes');


Route::resource('posts','PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
