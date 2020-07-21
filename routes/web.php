<?php

use Illuminate\Support\Facades\Route;

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
Route::name('admin.')->prefix('admin')->group(function () {
    // Dashboard
    Route::get('dashboard', [
        'uses' => 'DashboardController@index'
    ])->name('dashboard');
});
Route::name('admin.')->prefix('admin')->group(function () {
    // customers
    Route::get('customers', [
        'uses' => 'CustomersController@index'
    ])->name('customers');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
