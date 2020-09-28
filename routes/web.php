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
    return view('welcomeguest');
});

Route::get('/beranda', function () {
    return view('welcomeguest');
});

Route::get('/apasaja', function () {
    return view('apasaja');
});
Route::get('/artikel', function () {
    return view('artikel');
});
   Route::get('artikel/','LihatArtikelController@index') ; 

Route::get('/kapanperiksa', function () {
    return view('kapanperiksa');
});

Route::get('/tindakan', function () {
    return view('tindakan');
});
// Route::get('/2', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home',['as'=>'dashboard','uses'=>'HomeController@index']);
Route::get('/typography',['as'=>'typography','uses'=>'HomeController@typography']);
Route::get('/helper',['as'=>'helper','uses'=>'HomeController@helper']);
Route::get('/widget',['as'=>'widget','uses'=>'HomeController@widget']);
Route::get('/table',['as'=>'table','uses'=>'HomeController@table']);
Route::get('/media',['as'=>'media','uses'=>'HomeController@media']);
Route::get('/chart',['as'=>'chart','uses'=>'HomeController@chart']);
Route::get('/form',['as'=>'form','uses'=>'HomeController@form']);

Route::group(['middleware' => 'role:admin','prefix'     => 'admin','namespace'  => 'Admin',], function () {
	Route::resource('permissions', 'PermissionsController');     
    Route::resource('roles', 'RolesController'); 

    	

	Route::resource('admin/artikel', 'ArtikelController');
    Route::get('admin/artikel/','ArtikelController@index')->name('admin.artikel.index');  
    Route::post('/artikel/{artikel}/edit', 'ArtikelController@update')->name('artikel.update');

});
Route::group(['middleware' => 'role:pakar','prefix'     => 'admin','namespace'  => 'Admin',], function () {
    Route::resource('gejala', 'GejalaController');
    Route::get('admin/gejala/','GejalaController@index')->name('admin.gejala.index');  
    Route::post('/gejala/{gejala}/edit', 'GejalaController@update')->name('gejala.update');
    Route::get('admin/hasilsemuadeteksi/','DatadeteksiController@index')->name('gejala.hasilsemuadeteksi');

    Route::resource('users', 'UsersPakarController'); 
    Route::resource('add-items', 'AddItemController');  

    Route::resource('diagnosa', 'DiagnosaController');
    Route::get('admin/diagnosa/','DiagnosaController@index')->name('admin.diagnosa.index');  
    Route::post('/diagnosa/{diagnosa}/edit', 'DiagnosaController@update')->name('diagnosa.update');
    Route::resource('konsultasipakar', 'KonsultasiPakarController');
    Route::get('hasilsemuadeteksi/','DatadeteksiController@index')->name('gejala.hasilsemuadeteksi');

    Route::get('admin/konsultasipakar/','KonsultasiPakarController@index')->name('admin.konsultasi.index');
        Route::get('admin/konsultasipakar/{id}','KonsultasiPakarController@edit')->name('konsultasis.edit');
        Route::post('admin/konsultasipakar/','KonsultasiPakarController@update')->name('konsultasi.update');

    // Route::post('/konsultasi/{gejala}/edit', 'KonsultasiController@update')->name('konsultasi.update');
});
Route::group(['middleware' => 'role:user',], function () {
   // Route::get('user/konsultasi/','Admin\KonsultasiController@index')->name('konsultasi.index');
     Route::get('user/gejala','Admin\UserGejalaController@index')->name('gejala.index');
Route::post('/hasildeteksi','Admin\UserGejalaController@gejala')->name('gejala.ngitung');
        Route::post('user/gejala/','Admin\UserGejalaController@lihathasil')->name('gejala.hasildeteksi');
  // Route::get('user/konsultasi/','Admin\KonsultasiController@create')->name('konsultasi.index');
  // Route::post('user/konsultasi/','Admin\KonsultasiController@store')->name('konsultasi.store');
  // Route::get('user/konsultasi/lihat','Admin\KonsultasiController@index')->name('konsultasi.lihat');
  // Route::post('/konsultasi/{konsultasi}/edit', 'KonsultasiController@update')->name('admin.konsultasi.update');
});
Route::group(['middleware' => 'role:userverified',], function () {
     Route::get('user/notifikasi/','Admin\NotifikasiController@notifikasi');
     Route::get('user/notifupdate/','Admin\NotifikasiController@update');

   Route::get('user/konsultasi/','Admin\KonsultasiController@index')->name('konsultasi.index');
     Route::get('user/gejala/verified','Admin\UserGejalaController@verifiedindex')->name('gejala.verifiedindex');
Route::post('/hasildeteksiverified','Admin\UserGejalaController@gejalaverified')->name('gejala.ngitungverified');
        Route::post('user/gejala/verified','Admin\UserGejalaController@lihathasil')->name('gejala.hasildeteksiverified');

       // Route::post('user/gejala/','Admin\UserGejalaController@lihathasil')->name('gejala.hasildeteksi');
  Route::get('user/konsultasi/','Admin\KonsultasiController@create')->name('konsultasi.index');
  Route::post('user/konsultasi/','Admin\KonsultasiController@store')->name('konsultasi.store');
  Route::get('user/konsultasi/lihat','Admin\KonsultasiController@index')->name('konsultasi.lihat');
  Route::post('/konsultasi/{konsultasi}/edit', 'KonsultasiController@update')->name('admin.konsultasi.update');
});

Route::resource('profile','Users\ProfileController');



