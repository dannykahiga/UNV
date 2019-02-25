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

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/offices', function () {
    return view('offices.index');
});

Route::get('/apipage', function () {
    return view('pages.api');
});

Route::get('/', 'PagesController@index');

Route::get('/projects', 'PagesController@projects');

Route::get('/paginate5', 'ProjectsController@paginate5');

Route::get('/paginate15', 'ProjectsController@paginate15');

Route::get('/paginate25', 'ProjectsController@paginate25');

Route::get('/paginate35', 'ProjectsController@paginate35');

Route::get('/paginate45', 'ProjectsController@paginate45');

Route::resource('projects', 'ProjectsController');
