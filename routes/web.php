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

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('stokbarang', 'StokbarangController');
Route::resource('supplier', 'SupplierController');
Route::resource('transaksipembelian', 'TransaksipembeliansController');
Route::resource('transaksipenjualan', 'TransaksipenjualansController');
Route::resource('detailtransaksipembelian', 'DetailtransaksipembeliansController');