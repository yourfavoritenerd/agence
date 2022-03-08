<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * Home Routes
         */
        Route::get('/', 'IndexController@index')->name('index');
        

        //user routes
       
        
        Route::group(['prefix' => 'users'], function() {
            Route::post('/multi-delete', [UserController::class, 'multiDelete'])->name('users.multi-delete');
            Route::get('/list', 'UserController@index')->name('users.list');
            Route::get('/create', 'UserController@create')->name('users.create');
            Route::post('/store', 'UserController@store')->name('users.store');
            Route::get('/{user}/show', 'UserController@show')->name('users.show');
            Route::get('/{user}/edit', 'UserController@edit')->name('users.edit');
            Route::patch('/{user}/update-user', 'UserController@update')->name('users.update_user');
            Route::patch('/{user}/update-password', 'UserController@update_password')->name('users.update_password');
            Route::delete('/{user}/delete', 'UserController@destroy')->name('users.destroy');
        });

        });
        
});