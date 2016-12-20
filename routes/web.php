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
    return redirect()->route('app.home');
});


Auth::routes();

# Route::get('app/home', 'HomeController@index');

Route::group([
    'prefix' => 'app',
    'middleware' => ['auth']
], function () {
    Route::get('/', array(
        'as' => 'app.home',
        'uses' => 'HomeController@index'
    ));
    Route::group([
        'prefix' => 'user',
        'middleware' => ['role:user|admin']
    ], function () {

        Route::resource('files', 'UserFileController', array(
            'as' => 'customer'
        ));
    });

    Route::group([
        'prefix' => 'settings',
        'middleware' => ['role:admin']
    ], function () {
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
    });

});
