<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpkController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardWargaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//landing page
// Route::get('/', function () {
//     return view('welcome');
// });

// User
// route::get('/signin',[MasukController::class, 'SignIn'])->name('login'); // untuk Sign In
// route::get('/signup',[MasukController::class, 'SignUp'])->name('register'); // untuk Sign Up
// route::post('/user/store',[MasukController::class, 'store'])->name('user.store'); // untuk Store ke Database


route::get('/home',[TemplateController::class,'index'])->name('home')->middleware('not.warga');

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

//Login/logout
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

//dashboard
Route::get('/dashboard/index', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/rw', [DashboardController::class, 'rw'])->name('dashboard.rw')->middleware('rw');

//dashboard warga
Route::get('/DashboardWarga/index', [DashboardWargaController::class, 'index'])->name('DashboardWarga.index')->middleware('auth');
Route::get('/DashboardWarga/acara', [DashboardWargaController::class, 'acara'])->name('DashboardWarga.acara')->middleware('auth');
Route::get('/DashboardWarga/umkm', [DashboardWargaController::class, 'umkm'])->name('DashboardWarga.umkm')->middleware('auth');

// Acara
route::get('/acara/manage',[AcaraController::class,'manage'])->name('acara.manage')->middleware('not.warga'); // acara bagian manage
route::get('/acara/view',[AcaraController::class,'view'])->name('acara.view')->middleware('not.warga'); // melihat acara dari POV warga
route::get('/create',[AcaraController::class,'create'])->name('acara.create')->middleware('not.warga');
route::post('/store',[AcaraController::class,'store'])->name('acara.store')->middleware('not.warga');
route::get('/Acara/edit_acara/{id}', [AcaraController::class, 'edit_acara'])->name('acara.edit')->middleware('not.warga');
route::put('/Acara/update_acara/{id}', [AcaraController::class, 'update_acara'])->name('acara.update')->middleware('not.warga');
route::delete('/Acara/delete_acara/{id}', [AcaraController::class, 'delete_acara'])->name('acara.delete')->middleware('not.warga');

// UMKM
route::get('/umkm/register', [UmkmController::class, 'register'])->name('umkm.register')->middleware('auth');
route::get('/umkm/view', [UmkmController::class, 'view'])->name('umkm.view')->middleware('auth');
route::post('/umkm/store_umkm',[UmkmController::class,'store_umkm'])->name('umkm.store')->middleware('not.warga');
route::get('/umkm/edit_umkm/{id}', [UmkmController::class, 'edit_umkm'])->name('umkm.edit')->middleware('not.warga');
route::put('/umkm/update_umkm/{id}', [UmkmController::class, 'update_umkm'])->name('umkm.update')->middleware('not.warga');
route::delete('/umkm/delete_umkm/{id}', [UmkmController::class, 'delete_umkm'])->name('umkm.delete')->middleware('not.warga');

// Read Citizen
route::get('/citizen', [CitizenController::class, 'index'])->name('citizen.index')->middleware('sekretaris');


// RT
route::get('/citizen/rt', [CitizenController::class, 'rt'])->name('citizen.rt')->middleware('sekretaris');
route::get('/citizen/create_rt', [CitizenController::class, 'create_rt'])->name('rt.create')->middleware('sekretaris');
route::post('/citizen/store_rt', [CitizenController::class, 'store_rt'])->name('rt.store')->middleware('sekretaris');
route::get('/citizen/edit_rt/{id}', [CitizenController::class, 'edit_rt'])->name('rt.edit')->middleware('sekretaris');
route::put('/citizen/update_rt/{id}', [CitizenController::class, 'update_rt'])->name('rt.update')->middleware('sekretaris');
route::delete('/citizen/delete_rt/{id}', [CitizenController::class, 'delete_rt'])->name('rt.delete')->middleware('sekretaris');

// Warga
route::get('/citizen/warga', [CitizenController::class, 'warga'])->name('citizen.warga')->middleware('sekretaris');
route::get('/citizen/create_warga', [CitizenController::class, 'create_warga'])->name('warga.create')->middleware('sekretaris');
route::POST('/citizen/store_warga', [CitizenController::class, 'store_warga'])->name('warga.store')->middleware('sekretaris');
route::get('/citizen/edit_warga/{id}', [CitizenController::class, 'edit_warga'])->name('warga.edit')->middleware('sekretaris');
route::put('/citizen/update_warga/{id}', [CitizenController::class, 'update_warga'])->name('warga.update')->middleware('sekretaris');
route::delete('/citizen/delete_warga/{id}', [CitizenController::class, 'delete_warga'])->name('warga.delete')->middleware('sekretaris');


// KK
route::get('/citizen/kk', [CitizenController::class, 'kk'])->name('citizen.kk')->middleware('sekretaris');
route::get('/citizen/create_kk', [CitizenController::class, 'create_kk'])->name('kk.create')->middleware('sekretaris');
route::POST('/citizen/store_kk', [CitizenController::class, 'store_kk'])->name('kk.store')->middleware('sekretaris');
route::get('/citizen/edit_kk/{id}', [CitizenController::class, 'edit_kk'])->name('kk.edit')->middleware('sekretaris');
route::put('/citizen/update_kk/{id}', [CitizenController::class, 'update_kk'])->name('kk.update')->middleware('sekretaris');
route::delete('/citizen/delete_kk/{id}', [CitizenController::class, 'delete_kk'])->name('kk.delete')->middleware('sekretaris');

// ORganisasi
route::get('/citizen/organisasi', [CitizenController::class, 'organisasi'])->name('citizen.organisasi')->middleware('sekretaris');
route::get('/citizen/create_organisasi', [CitizenController::class, 'create_organisasi'])->name('organisasi.create')->middleware('sekretaris');
route::POST('/citizen/store_organisasi', [CitizenController::class, 'store_organisasi'])->name('organisasi.store')->middleware('sekretaris');
route::get('/citizen/edit_organisasi/{id}', [CitizenController::class, 'edit_organisasi'])->name('organisasi.edit')->middleware('sekretaris');
route::put('/citizen/update_organisasi/{id}', [CitizenController::class, 'update_organisasi'])->name('organisasi.update')->middleware('sekretaris');
route::delete('/citizen/delete_organisasi/{id}', [CitizenController::class, 'delete_organisasi'])->name('organisasi.delete')->middleware('sekretaris');

//RUMAH
route::get('/citizen/rumah', [CitizenController::class, 'rumah'])->name('citizen.rumah')->middleware('sekretaris');
route::get('/citizen/create_rumah', [CitizenController::class, 'create_rumah'])->name('rumah.create')->middleware('sekretaris');
route::post('/citizen/store_rumah', [CitizenController::class, 'store_rumah'])->name('rumah.store')->middleware('sekretaris');
route::get('/citizen/edit_rumah/{id}', [CitizenController::class, 'edit_rumah'])->name('rumah.edit')->middleware('sekretaris');
route::put('/citizen/update_rumah/{id}', [CitizenController::class, 'update_rumah'])->name('rumah.update')->middleware('sekretaris');
route::delete('/citizen/delete_rumah/{id}', [CitizenController::class, 'delete_rumah'])->name('rumah.delete')->middleware('sekretaris');

// Laporan
route::get('/laporan/view', [LaporanController::class, 'view'])->name('laporan.view')->middleware('not.warga');
route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create')->middleware('not.warga');
route::get('/laporan/track', [LaporanController::class, 'track'])->name('laporan.track')->middleware('not.warga');
route::get('/laporan/edit/{id}', [LaporanController::class, 'edit'])->name('laporan.edit')->middleware('not.warga');
route::post('/laporan/store', [LaporanController::class, 'store'])->name('laporan.store')->middleware('not.warga');



// Bansos
route::get('/Bansos/informasi', [BansosController::class, 'informasi'])->name('bansos.informasi')->middleware('not.warga');
route::get('/Bansos/pengajuan', [BansosController::class, 'pengajuan'])->name('bansos.pengajuan')->middleware('not.warga');
route::get('/Bansos/manage', [BansosController::class, 'manage'])->name('bansos.manage')->middleware('not.warga');
route::get('/Bansos/lurah', [BansosController::class, 'lurah'])->name('bansos.lurah')->middleware('not.warga');

// Iuran
route::get('/Iuran/index', [IuranController::class, 'index'])->name('iuran.index')->middleware('sekretaris');


// SPK
route::get('/SPK/topsis', [SpkController::class, 'index'])->name('spk.topsis');

