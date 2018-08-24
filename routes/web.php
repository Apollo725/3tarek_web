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
Route::match(['get', 'post'], '/admin', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', 'AdminController@dashboard');

Route::get('/logout', 'AdminController@logout');

Route::get('/admin/driver_info', 'DriverinfoController@index');

Route::get('/admin/drivers', 'DrivershowController@index');

Route::get('/admin/daily_distance', 'DailydistanceController@index');

Route::get('/admin/coupons', 'CouponController@index');

