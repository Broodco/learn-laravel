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

// Classic routes
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');



// Show all projects route
Route::get('/projects', 'ProjectsController@index');

// Project creation routes
Route::get('/projects/create', 'ProjectsController@create');
Route::post('/projects', 'ProjectsController@store');

// Show one project route
Route::get('/projects/{project}', 'ProjectsController@show');

// Project update routes
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
Route::patch('/projects/{project}', 'ProjectsController@update');

// Project deletion routes
Route::delete('/projects/{project}', 'ProjectsController@destroy');



// Laravel automatic routing -> Similar to the Project code above
Route::resource('assignments', 'AssignmentsController');
