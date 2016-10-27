<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('statuses', 'StatusController');

Route::resource('documentTypes', 'DocumentTypeController');

Route::resource('procedures', 'ProcedureController');

Route::resource('reportTypes', 'ReportTypeController');

Route::resource('customers', 'CustomerController');

Route::resource('files', 'FileController');

Route::resource('archives', 'ArchiveController');

Route::resource('reports', 'ReportController');

Route::resource('administrativeAreas', 'AdministrativeAreaController');