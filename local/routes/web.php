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


Route::get('/', 'web\webController@index')->name('home');
Route::get('news', 'web\webController@news')->name('news');
Route::get('program', 'web\webController@program')->name('program');
Route::get('donate', 'web\webController@donate')->name('donate');
Route::get('contact', 'web\webController@contact')->name('contact');
Route::get('about', 'web\webController@about')->name('about');

Route::get('news/{id}', 'web\webController@thread');

//////////////////////// Login ////////////////////////
Route::get('admin', 'admin\ddusersController@login')->name('admin');
Route::post('admin/loginPost', 'admin\ddusersController@loginPost')->name('loginPost');
Route::get('admin/logout', 'admin\ddusersController@logout')->name('logout');

//////////////////////// Menu ////////////////////////

Route::get('admin/dashboard', 'admin\panelMenuController@index')->name('dashboard');
Route::get('admin/news', 'admin\panelMenuController@news')->name('newsAdmin');
Route::get('admin/donate', 'admin\panelMenuController@donate')->name('donateAdmin');
Route::get('admin/message', 'admin\panelMenuController@msg')->name('msgAdmin');