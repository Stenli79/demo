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

Auth::routes(['verify' => true]);

Route::get('/home', 'Grid\GridController@index')->name('home');
Route::get('/debug', 'HomeController@debug')->name('debug');

Route::group(['prefix' => 'grid', 'namespace' => 'Grid'], function () {
    Route::get('/', 'GridController@index')->name('home');
    Route::get('/{id}/edit', 'GridController@edit')->name('grid.edit')->where('id', '[0-9]+');
    Route::put('/{id}/create', 'GridController@create')->name('grid.create')->where('id', '[0-9]+');
    Route::put('/{id}/update', 'GridController@update')->name('grid.update')->where('id', '[0-9]+');
    Route::get('/{id}/clear', 'GridController@clear')->name('grid.clear')->where('id', '[0-9]+');
});

Route::group(['prefix' => 'links', 'namespace' => 'Link'], function () {
    Route::get('/', 'LinkController@index')->name('link.index');
    Route::get('/create', 'LinkController@create')->name('link.create');
    Route::post('/store', 'LinkController@store')->name('link.store');
    Route::get('/{id}/edit', 'LinkController@edit')->name('link.edit')->where('id', '[0-9]+');
    Route::put('/{id}/update', 'LinkController@update')->name('link.update')->where('id', '[0-9]+');
    Route::delete('/{id}/destroy', 'LinkController@destroy')->name('link.destroy')->where('id', '[0-9]+');
    Route::get('/{id}/move-up', 'LinkController@moveUp')->name('link.up')->where('id', '[0-9]+');
    Route::get('/{id}/move-down', 'LinkController@moveDown')->name('link.down')->where('id', '[0-9]+');
});

Route::resource('colors', 'Color\ColorController')->names([
    'index'     => 'color.index',
    'create'    => 'color.create',
    'store'     => 'color.store',
    'show'      => 'color.show',
    'edit'      => 'color.edit',
    'update'    => 'color.update',
    'destroy'   => 'color.destroy'
]);


