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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/project', 'ProjectController@index');
Route::get('/admin', 'AdminController@index');
Route::resource('user', 'UserController');
Route::resource('adminBlog', 'AdminBlogController');