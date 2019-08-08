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

Route::get('/admin', function () {
    return view('admin');});

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reconce', 'RemittanceDetailController@index')->name('reconc');
Route::get('/remittance', 'RemittancesController@index')->name('reconc');
Route::get('/rmdatatable', 'RemittanceDetailController@dataViews')->name('rmtdata');
Route::get('/search', 'RemittanceDetailController@create')->name('search');
Route::post('/searchremit', 'RemittanceDetailController@search')->name('searchremit');
Route::get('/bankcoll', 'BankCollectionController@index')->name('bankcollection');
Route::get('/exception', 'BankCollectionController@create')->name('mismatch');
