<?php

use App\Http\Controllers\IuranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\CitizenController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BansosController;


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



route::get('/home',[TemplateController::class,'index'])->name('home');

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

//landing page
// Route::get('/', function () {
//     return view('welcome');
// });

//Login/logout
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

//dashboard
Route::get('/dashboard/index', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/index_warga', [DashboardController::class, 'warga'])->name('dashboard.warga');


// User
// route::get('/signin',[MasukController::class, 'SignIn'])->name('login'); // untuk Sign In
// route::get('/signup',[MasukController::class, 'SignUp'])->name('register'); // untuk Sign Up
// route::post('/user/store',[MasukController::class, 'store'])->name('user.store'); // untuk Store ke Database

// Acara
route::get('/acara/manage',[AcaraController::class,'manage'])->name('acara.manage'); // acara bagian manage
route::get('/acara/view',[AcaraController::class,'view'])->name('acara.view'); // melihat acara dari POV warga
route::get('/create',[AcaraController::class,'create'])->name('acara.create');
route::post('/store',[AcaraController::class,'store'])->name('acara.store');
route::get('/Acara/edit_acara/{id}', [AcaraController::class, 'edit_acara'])->name('acara.edit');
route::put('/Acara/update_acara/{id}', [AcaraController::class, 'update_acara'])->name('acara.update');
route::delete('/Acara/delete_acara/{id}', [AcaraController::class, 'delete_acara'])->name('acara.delete');

// UMKM
route::get('/umkm/register', [UmkmController::class, 'register'])->name('umkm.register');

// Read Citizen
route::get('/citizen', [CitizenController::class, 'index'])->name('citizen.index');


// RT
route::get('/citizen/rt', [CitizenController::class, 'rt'])->name('citizen.rt');
route::get('/citizen/create_rt', [CitizenController::class, 'create_rt'])->name('rt.create');
route::post('/citizen/store_rt', [CitizenController::class, 'store_rt'])->name('rt.store');
route::get('/citizen/edit_rt/{id}', [CitizenController::class, 'edit_rt'])->name('rt.edit');
route::put('/citizen/update_rt/{id}', [CitizenController::class, 'update_rt'])->name('rt.update');
route::delete('/citizen/delete_rt/{id}', [CitizenController::class, 'delete_rt'])->name('rt.delete');

// Warga
route::get('/citizen/warga', [CitizenController::class, 'warga'])->name('citizen.warga');
route::get('/citizen/create_warga', [CitizenController::class, 'create_warga'])->name('warga.create');
route::POST('/citizen/store_warga', [CitizenController::class, 'store_warga'])->name('warga.store');
route::get('/citizen/edit_warga/{id}', [CitizenController::class, 'edit_warga'])->name('warga.edit');
route::put('/citizen/update_warga/{id}', [CitizenController::class, 'update_warga'])->name('warga.update');
route::delete('/citizen/delete_warga/{id}', [CitizenController::class, 'delete_warga'])->name('warga.delete');


// KK
route::get('/citizen/kk', [CitizenController::class, 'kk'])->name('citizen.kk');
route::get('/citizen/create_kk', [CitizenController::class, 'create_kk'])->name('kk.create');
route::POST('/citizen/store_kk', [CitizenController::class, 'store_kk'])->name('kk.store');
route::get('/citizen/edit_kk/{id}', [CitizenController::class, 'edit_kk'])->name('kk.edit');
route::put('/citizen/update_kk/{id}', [CitizenController::class, 'update_kk'])->name('kk.update');
route::delete('/citizen/delete_kk/{id}', [CitizenController::class, 'delete_kk'])->name('kk.delete');

// ORganisasi
route::get('/citizen/organisasi', [CitizenController::class, 'organisasi'])->name('citizen.organisasi');
route::get('/citizen/create_organisasi', [CitizenController::class, 'create_organisasi'])->name('organisasi.create');
route::POST('/citizen/store_organisasi', [CitizenController::class, 'store_organisasi'])->name('organisasi.store');
route::get('/citizen/edit_organisasi/{id}', [CitizenController::class, 'edit_organisasi'])->name('organisasi.edit');
route::put('/citizen/update_organisasi/{id}', [CitizenController::class, 'update_organisasi'])->name('organisasi.update');
route::delete('/citizen/delete_organisasi/{id}', [CitizenController::class, 'delete_organisasi'])->name('organisasi.delete');

//RUMAH
route::get('/citizen/rumah', [CitizenController::class, 'rumah'])->name('citizen.rumah');
route::get('/citizen/create_rumah', [CitizenController::class, 'create_rumah'])->name('rumah.create');
route::post('/citizen/store_rumah', [CitizenController::class, 'store_rumah'])->name('rumah.store');
route::get('/citizen/edit_rumah/{id}', [CitizenController::class, 'edit_rumah'])->name('rumah.edit');
route::put('/citizen/update_rumah/{id}', [CitizenController::class, 'update_rumah'])->name('rumah.update');
route::delete('/citizen/delete_rumah/{id}', [CitizenController::class, 'delete_rumah'])->name('rumah.delete');

// Laporan
route::get('/laporan/view', [LaporanController::class, 'view'])->name('laporan.view');
route::get('/laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
route::get('/laporan/track', [LaporanController::class, 'track'])->name('laporan.track');


// Bansos
route::get('/Bansos/informasi', [BansosController::class, 'informasi'])->name('bansos.informasi');
route::get('/Bansos/pengajuan', [BansosController::class, 'pengajuan'])->name('bansos.pengajuan');
route::get('/Bansos/manage', [BansosController::class, 'manage'])->name('bansos.manage');
route::get('/Bansos/lurah', [BansosController::class, 'lurah'])->name('bansos.lurah');

// Iuran
route::get('/Iuran/index', [IuranController::class, 'index'])->name('iuran.index');

