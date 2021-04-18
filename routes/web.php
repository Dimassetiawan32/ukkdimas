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


Route::get('/beranda', 'HomeController@index')->name('beranda');

Route::group(['prefix' => 'biaya'], function(){
    Route::get('index', 'masterdata\BiayaController@index')->name('masterdata.biaya.index');
    Route::get('create', 'masterdata\BiayaController@create')->name('masterdata.biaya.create');
    Route::post('save', 'masterdata\BiayaController@store')->name('masterdata.biaya.save');
    Route::get('formEdit/{biaya}', 'masterdata\BiayaController@edit')->name('masterdata.biaya.formEdit');
    Route::patch('update/{biaya}', 'masterdata\BiayaController@update')->name('masterdata.biaya.update');
    Route::delete('delete/{biaya}', 'masterdata\BiayaController@destroy')->name('masterdata.biaya.delete');
});

Route::group(['prefix' => 'user'], function(){
    Route::get('index', 'masterdata\UserController@index')->name('masterdata.user.index');
    Route::get('create', 'masterdata\UserController@create')->name('masterdata.user.create');
});

Route::group(['prefix' => 'laporan'], function(){
    Route::get('index', 'LaporanController@index')->name('laporan.index');
    Route::get('rekap/{tglawal}/{tglakhir}', 'LaporanController@rekap')->name('laporan.rekap');
});

Route::group(['prefix' => 'transaksi'], function(){
    Route::get('index', 'TransaksiController@index')->name('transaksi.index');
    Route::get('create', 'TransaksiController@create')->name('transaksi.create');
    Route::post('save', 'TransaksiController@store')->name('transaksi.save');
    Route::get('CekNota/{transaksi}', 'TransaksiController@ceknota')->name('transaksi.CekNota');
    Route::get('formEdit/{transaksi}', 'TransaksiController@edit')->name('transaksi.formEdit');
    Route::patch('update/{transaksi}', 'TransaksiController@update')->name('transaksi.update');
    Route::delete('delete/{transaksi}', 'TransaksiController@destroy')->name('transaksi.delete');
});
    
    






