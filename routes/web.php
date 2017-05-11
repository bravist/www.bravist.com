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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(
    [
        'prefix' => 'admin', 
        'namespace' => 'Admin', 
        'middleware' => 'web'
    ], 
    function ($route) {

        $route->get('register', 'Auth\RegisterController@index')->name('register.admin');
        $route->post('register', 'Auth\RegisterController@store');
        $route->get('login', 'Auth\LoginController@index')->name('login.admin');
        $route->post('login', 'Auth\LoginController@login')->name('login.admin');
        $route->post('logout', 'Auth\LoginController@logout')->name('logout.admin');

        Route::group(
            [
                'middleware' => 'auth.admin'
            ],
            function ($route) {
                $route->get('dashboard', 'DashboardController@index')->name('dashboard');
                $route->resource('roles', 'RoleController');
                $route->resource('permissions', 'PermissionController');
                $route->resource('managers', 'ManagerController');
            }
        );
});
