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

/*File routes -> RouteController*/

//Redirect to home
Route::get('/', 'RouteController@homeRedirect');

//Route Controller
Route::get('/home', 'RouteController@home');
Route::get('/about', 'RouteController@about');
Route::get('/contacts', 'RouteController@contacts');

//Project Controller
Route::get('/projects', 'ProjectController@projects');



//Download
Route::get('/cv', 'DownloadController@download_CV');