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
Route::get('/projects', [
    'uses' => 'ProjectController@projects',
    'as' => 'project.home'
]);

//Download CV ENG
Route::get('/cv_eng', 'DownloadController@download_cv_eng');
//Download CV LT
Route::get('/cv_lt', 'DownloadController@download_cv_lt');
//Download Credits
Route::get('/credits', 'DownloadController@download_Credits');