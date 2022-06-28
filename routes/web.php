<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group( [
    'prefix'=>'user',
    'middleware'=>['auth'],

],

    function(){ 

        Route::get('/index','UserController@index')->name('admin_user_index');
        Route::get('/view/{id}','UserController@view')->name('admin_user_view');
        Route::get('/create','UserController@create')->name('admin_user_create');
        Route::post('/store','UserController@store')->name('admin_user_store');
        Route::get('/edit/{id}','UserController@edit')->name('admin_user_edit');
        Route::post('/update','UserController@update')->name('admin_user_update');
        Route::post('/delete','UserController@delete')->name('admin_user_delete');
        Route::get('/test/{id}','UserController@test')->name('admin_user_test');
        
});

// Route::resource('user', 'UserController');
