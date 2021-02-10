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
Route::get('/detailBlog/{id}', 'BlogController@detail');
Route::get('/project', 'ProjectController@index');
Route::get('/detail/{id}', 'ProjectController@detail');
Route::get('/admin', 'AdminController@index');
Route::resource('user', 'UserController');
Route::resource('adminBlog', 'AdminBlogController');
Route::resource('adminProject', 'AdminProjectController');
Route::get('/email','KoenergiaEmailController@send');
Route::get('/partner', 'PartnerShipController@index');
Route::resource('adminPartner', 'AdminPartnerShipController');
Route::post('/store', 'HomeController@store');
Route::get('/career', 'CarierController@index');
Route::resource('adminCarier', 'AdminCarierController');
Route::resource('adminContribusi', 'AdminContribusiController');

//clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return view('layouts.app');
});