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

Route::get('/', function () {
    return view('frontend.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('home');
Route::get('/profile/hapus/{id}', 'App\Http\Controllers\ProfileController@hapus')->name('home');
Route::get('/profile/tambah', 'App\Http\Controllers\ProfileController@store')->name('home');
Route::get('/profile/edit/{id}', 'App\Http\Controllers\ProfileController@edit')->name('home');
Route::post('/profile/rubah', 'App\Http\Controllers\ProfileController@rubah')->name('home');
Route::post('/profile/simpan', 'App\Http\Controllers\ProfileController@simpan')->name('home');

Route::get('/profile2', [App\Http\Controllers\Profile2Controller::class, 'index'])->name('home');
Route::get('/profile2/hapus/{id}', 'App\Http\Controllers\Profile2Controller@hapus')->name('home');
Route::get('/profile2/tambah', 'App\Http\Controllers\Profile2Controller@store')->name('home');
Route::get('/profile2/edit/{id}', 'App\Http\Controllers\Profile2Controller@edit')->name('home');
Route::post('/profile2/rubah', 'App\Http\Controllers\Profile2Controller@rubah')->name('home');
Route::post('/profile2/simpan', 'App\Http\Controllers\Profile2Controller@simpan')->name('home');

//permohonan
Route::get('/permohonan', [App\Http\Controllers\PermohonanController::class, 'index'])->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/hapus/{id}', 'App\Http\Controllers\PermohonanController@hapus')->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/tambah', 'App\Http\Controllers\PermohonanController@tambah')->middleware('checkRole:superadmin,mahasiswa');
Route::post('/permohonan/tambah1', 'App\Http\Controllers\PermohonanController@tambah1')->middleware('checkRole:superadmin,mahasiswa');
Route::post('/permohonan/simpan', 'App\Http\Controllers\PermohonanController@simpan')->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/edit/{id}', 'App\Http\Controllers\PermohonanController@edit')->middleware('checkRole:superadmin,mahasiswa');
Route::post('/permohonan/rubah', 'App\Http\Controllers\PermohonanController@rubah')->middleware('checkRole:superadmin,mahasiswa');
Route::post('/permohonan/proses', 'App\Http\Controllers\PermohonanController@proses_upload')->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/acc/{id}', 'App\Http\Controllers\PermohonanController@acc')->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/tolak/{id}', 'App\Http\Controllers\PermohonanController@tolak')->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/ditolak', 'App\Http\Controllers\PermohonanController@ditolak')->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/belumtervalidasi', 'App\Http\Controllers\PermohonanController@belumtervalidasi')->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/masuk', 'App\Http\Controllers\PermohonanController@masuk')->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/cetak_pdf', 'App\Http\Controllers\PermohonanController@cetak_pdf')->middleware('checkRole:superadmin,mahasiswa');
Route::get('/permohonan/cetak', 'App\Http\Controllers\PermohonanController@cetak')->middleware('checkRole:superadmin,mahasiswa');

//daftar_permohonan
Route::get('/listpermohonan', [App\Http\Controllers\ListpermohonanController::class, 'index'])->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/listpermohonan/hapus/{id}', 'App\Http\Controllers\ListpermohonanController@hapus')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/listpermohonan/acc/{id}', 'App\Http\Controllers\ListpermohonanController@acc')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/listpermohonan/tolak/{id}', 'App\Http\Controllers\ListpermohonanController@tolak')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/listpermohonan/ditolak', 'App\Http\Controllers\ListpermohonanController@ditolak')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/listpermohonan/belumtervalidasi', 'App\Http\Controllers\ListpermohonanController@belumtervalidasi')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/listpermohonan/masuk', 'App\Http\Controllers\ListpermohonanController@masuk')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/listpermohonan/cetak/{id}', 'App\Http\Controllers\ListpermohonanController@cetak')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/listpermohonan/buka_file/{id}','App\Http\Controllers\ListpermohonanController@buka_file')->middleware('checkRole:superadmin,kemahasiswaan,admin');

//admin
Route::get('/dataadmin', [App\Http\Controllers\DataadminController::class, 'index'])->middleware('checkRole:superadmin,kemahasiswaan');
Route::get('/dataadmin/hapus/{id}', 'App\Http\Controllers\DataadminController@hapus')->middleware('checkRole:superadmin,kemahasiswaan');
Route::get('/dataadmin/tambah', 'App\Http\Controllers\DataadminController@store')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/dataadmin/acc/{id}', 'App\Http\Controllers\DataadminController@acc')->middleware('checkRole:superadmin,kemahasiswaan');
Route::get('/dataadmin/tolak/{id}', 'App\Http\Controllers\DataadminController@tolak')->middleware('checkRole:superadmin,kemahasiswaan');
Route::post('/dataadmin/simpan', 'App\Http\Controllers\DataadminController@simpan')->middleware('checkRole:superadmin,kemahasiswaan,admin');

//mahasiswa
Route::get('/datamahasiswa', [App\Http\Controllers\DatamahasiswaController::class, 'index'])->middleware('checkRole:superadmin,kemahasiswaan');
Route::get('/datamahasiswa/hapus/{id}', 'App\Http\Controllers\DatamahasiswaController@hapus')->middleware('checkRole:superadmin,kemahasiswaan');
Route::get('/datamahasiswa/tambah', 'App\Http\Controllers\DatamahasiswaController@store')->middleware('checkRole:superadmin,kemahasiswaan');
Route::get('/datamahasiswa/edit/{id}', 'App\Http\Controllers\DatamahasiswaController@edit')->middleware('checkRole:superadmin,kemahasiswaan');
Route::post('/datamahasiswa/rubah', 'App\Http\Controllers\DatamahasiswaController@rubah')->middleware('checkRole:superadmin,kemahasiswaan');
Route::post('/datamahasiswa/simpan', 'App\Http\Controllers\DatamahasiswaController@simpan')->middleware('checkRole:superadmin,kemahasiswaan');

//kategori
Route::get('/datakategori', [App\Http\Controllers\DatakategoriController::class, 'index'])->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/datakategori/hapus/{id}', 'App\Http\Controllers\DatakategoriController@hapus')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/datakategori/tambah', 'App\Http\Controllers\DatakategoriController@store')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/datakategori/edit/{id}', 'App\Http\Controllers\DatakategoriController@edit')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::post('/datakategori/rubah', 'App\Http\Controllers\DatakategoriController@rubah')->middleware('checkRole:superadmin,kemahasiswaan,admin');

//kegiatan
Route::get('/datakegiatan', [App\Http\Controllers\DatakegiatanController::class, 'index'])->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/datakegiatan/hapus/{id}', 'App\Http\Controllers\DatakegiatanController@hapus')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/datakegiatan/tambah', 'App\Http\Controllers\DatakegiatanController@store')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/datakegiatan/edit/{id}', 'App\Http\Controllers\DatakegiatanController@edit')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::post('/datakegiatan/rubah', 'App\Http\Controllers\DatakegiatanController@rubah')->middleware('checkRole:superadmin,kemahasiswaan,admin');

//Pejabat
Route::get('/datapejabat', [App\Http\Controllers\DatapejabatController::class, 'index'])->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::get('/datapejabat/edit/{id}', 'App\Http\Controllers\DatapejabatController@edit')->middleware('checkRole:superadmin,kemahasiswaan,admin');
Route::post('/datapejabat/rubah', 'App\Http\Controllers\DatapejabatController@rubah')->middleware('checkRole:superadmin,kemahasiswaan,admin');

//checkrole
Route::get('superadmin', function () { return view('/home'); })->middleware('checkRole:superadmin');
Route::get('admin', function () { return view('/home'); })->middleware(['checkRole:superadmin,admin']);
Route::get('mahasiswa', function () { return view('/home'); })->middleware(['checkRole:superadmin,mahasiswa']);
Route::get('kemahasiswaan', function () { return view('/home'); })->middleware(['checkRole:superadmin,kemahasiswaan']);

//kemahasiswaan
Route::get('/datakemahasiswaan', [App\Http\Controllers\DatakemahasiswaanController::class, 'index'])->middleware('checkRole:superadmin,kemahasiswaan');
Route::get('/datakemahasiswaan/hapus/{id}', 'App\Http\Controllers\DatakemahasiswaanController@hapus')->middleware('checkRole:superadmin,kemahasiswaan');
Route::get('/datakemahasiswaan/tambah', 'App\Http\Controllers\DatakemahasiswaanController@store')->middleware('checkRole:superadmin,kemahasiswaan');
Route::get('/datakemahasiswaan/edit/{id}', 'App\Http\Controllers\DatakemahasiswaanController@edit')->middleware('checkRole:superadmin,kemahasiswaan');
Route::post('/datakemahasiswaan/rubah', 'App\Http\Controllers\DatakemahasiswaanController@rubah')->middleware('checkRole:superadmin,kemahasiswaan');
Route::post('/datakemahasiswaan/simpan', 'App\Http\Controllers\DatakemahasiswaanController@simpan')->middleware('checkRole:superadmin,kemahasiswaan');

//Logout
Route::get('/logout', 'App\Http\Controllers\HomeController@logout');

