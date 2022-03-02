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

Route::get('/', function () {
    return view('index');
})->middleware('guest');

Auth::routes(['register' => false]);

Route::get('home', 'HomeController@home')->name('home')->middleware('isnt_admin');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('buscarUsuarios', 'UserController@buscarUsuarios');

Route::group([
    'middleware' => 'is_admin',
    'prefix' => 'admin'
], function () {
    Route::resource('users', 'UserController');
});