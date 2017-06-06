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
    return "hello";
});

Route::group(['prefix' => 'pemesanan'], function () {
    Route::get('/pemesananBaru','Pemesanan\PemesananBaruController@index');
});


#routing Pegawai
Route::group(['prefix' => 'pegawai'], function () {
    Route::get('/index','Pegawai\PegawaiController@index');
    Route::get('/tambahPegawai','Pegawai\PegawaiController@tambahPegawai');
    Route::get('/tampilDataPegawai','Pegawai\PegawaiController@tampilDataPegawai');
    Route::get('/dataTablesPegawai','Pegawai\PegawaiController@dataTablesPegawai');
    Route::get('/tampilEditPegawai','Pegawai\PegawaiController@tampilEditPegawai');
    Route::get('/editPegawai','Pegawai\PegawaiController@editPegawai');
    Route::get('/hapusPegawai','Pegawai\PegawaiController@hapusPegawai');

});

#routing Treatment
Route::group(['prefix' => 'treatment'], function () {
    Route::get('/index','Treatment\TreatmentController@index');
    Route::get('/tampilDataTreatment','Treatment\TreatmentController@tampilDataTreatment');
    Route::get('/dataTablesTreatment','Treatment\TreatmentController@dataTablesTreatment');
    Route::get('/tambahTreatment','Treatment\TreatmentController@tambahTreatment');
    Route::get('/tampilEditTreatment','Treatment\TreatmentController@tampilEditTreatment');
    Route::get('/editTreatment','Treatment\TreatmentController@editTreatment');
    Route::get('/hapusTreatment','Treatment\TreatmentController@hapusTreatment');
});


#routing Terapis
Route::group(['prefix' => 'terapis'], function() {
    Route::get('/index','Terapis\TerapisController@index');
    Route::get('/tampilDataTerapis','Terapis\TerapisController@tampilDataTerapis');
    Route::get('/dataTablesTerapis','Terapis\TerapisController@dataTablesTerapis');
    Route::get('/tambahTerapis','Terapis\TerapisController@tambahTerapis');
    Route::get('/tampilEditTerapis','Terapis\TerapisController@tampilEditTerapis');
    Route::get('/editTerapis','Terapis\TerapisController@editTerapis');
    Route::get('/hapusTerapis','Terapis\TerapisController@hapusTerapis');
});

#routing waktu ooperasional
Route::group(['prefix' => 'waktu'],function() {
    Route::get('/index','Waktu\WaktuController@index');
    Route::get('/tampilDataWaktu','Waktu\WaktuController@tampilDataWaktu');
    Route::get('/dataTablesWaktu','Waktu\WaktuController@dataTablesWaktu');
    Route::get('/tampilEditWaktu','Waktu\WaktuController@tampilEditWaktu');
    Route::get('/editWaktu','Waktu\WaktuController@editWaktu');
});

#routing data reseller
Route::group(['prefix' => 'reseller'],function(){
    Route::get('/index','Reseller\ResellerController@index');
    Route::get('/tampilDataReseller','Reseller\ResellerController@tampilDataReseller');
    Route::get('/dataTablesReseller','Reseller\ResellerController@dataTablesReseller');
    Route::get('/tambahReseller','Reseller\ResellerController@tambahReseller');
    Route::get('/tampilEditReseller','Reseller\ResellerController@tampilEditReseller');
    Route::get('/editReseller','Reseller\ResellerController@editReseller');
    Route::get('/hapusReseller','Reseller\ResellerController@hapusReseller');

});

#routing Tester
  Route::get('/tester','testerController@tampilTestAdmin');
