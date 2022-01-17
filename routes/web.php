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

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('showLogout', function () {
    return view('auth.logout');
});
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('showDetail/{id}', 'ProjectsController@show')->name('show');
Route::get('/', 'ProjectsController@index')->name('top');

Route::group(['middleware' => 'auth'], function () {
    Route::get('match', 'ProjectsController@match')->name('match');
});

Route::get('searchInput', 'ProjectsController@searchInput')->name('searchInput');
Route::get('search', 'ProjectsController@search')->name('search');
