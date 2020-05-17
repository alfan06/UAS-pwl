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


Route::get('/', 'HomerController@index');
Route::get('/kamar', 'KamarController@index');
Route::get('/kamar/detailKamar/{id}', 'KamarController@detailKamar');

Route::get('/penyewa', 'PenyewaController@getPenyewa');
Route::get('/penyewa/tambahPenyewa','PenyewaController@addPenyewa');
Route::post('penyewa/savePenyewa','PenyewaController@savePenyewa');

Route::get('/transaksi', 'TransaksiController@getTransaksi');
Route::get('/transaksi/tambahTransaksi','TransaksiController@addTransaksi');
Route::post('transaksi/saveTransaksi','TransaksiController@saveTransaksi');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'KamarController@index')->name('home');
Route::get('/kamar/detail/{id}', 'KamarController@detailKamar');
