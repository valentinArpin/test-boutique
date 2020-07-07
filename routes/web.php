<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/store/client', 'StoreController@index')->name('store.index');
Route::get('/store/client/shop', 'ShopController@index')->name('shop.index');

Route::post('/preview-pdf/{filename}', 'PDFController@getFile')->name('download.user');

//auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
