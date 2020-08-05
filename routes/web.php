<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inquire', 'reservecontroller@index')->name('inquire');
Route::get('/show', 'reservecontroller@show')->name('show');
Route::get('/show/{id}', 'reservecontroller@create')->name('create');
// Route::get('/create', 'reservecontroller@create')->name('create');
Route::get('/trip', 'reservecontroller@trip')->name('trip');
Route::get('/admin', 'admin@index')->name('admin');
Route::get('/create', 'admin@create')->name('create');
Route::get('/delete/{id}', 'admin@destroy')->name('delete');

Route::get('/usersconfig', 'userconfig@index')->name('users');
Route::get('/add_user', 'userconfig@create')->name('add');
Route::get('/ch_role/{id}', 'userconfig@update')->name('ch_role');
Route::get('/delete_user/{id}', 'userconfig@destroy')->name('delete_user');
Route::get('/edit_user/{id}', 'userconfig@show')->name('edit');
Route::get('/update_user', 'userconfig@edit')->name('update');