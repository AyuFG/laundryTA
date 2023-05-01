<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\SuperAdmin;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Client;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminLayananController;
use App\Http\Controllers\Admin\AdminSubLayananController;
use App\Http\Controllers\Admin\AdminTransaksiController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Client\ClientLayananController;
use App\Http\Controllers\Client\ClientOrderController;
use App\Http\Controllers\Client\ClientSubLayananController;
use App\Http\Controllers\UserProfileController;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {

  Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

  // CMS SUPER ADMIN
  Route::middleware([SuperAdmin::class])->name('super.')->prefix('super')->group(function () {
      Route::get('/', [HomeController::class, 'index'])->name('index');
      Route::resource('layanan', AdminLayananController::class);
      Route::resource('transaksi', AdminTransaksiController::class);
      Route::resource('sublayanan', AdminSubLayananController::class);
      Route::get('createSub/{id}', [AdminSubLayananController::class, 'createSub'])->name('createSub');
      Route::resource('user', AdminUserController::class);
      Route::resource('profile', UserProfileController::class);
      Route::get('laporan', [AdminTransaksiController::class, 'indexLaporan']);
      Route::get('chart', [AdminTransaksiController::class, 'indexChart']);
    });

  // CMS ADMIN
  Route::middleware([Admin::class])->name('admin.')->prefix('admin')->group(function () {
      Route::get('/', [HomeController::class, 'index'])->name('index');
      Route::resource('layanan', AdminLayananController::class);
      Route::resource('transaksi', AdminTransaksiController::class);
      Route::resource('sublayanan', AdminSubLayananController::class);
      Route::get('createSub/{id}', [AdminSubLayananController::class, 'createSub'])->name('createSub');
      Route::resource('user', AdminUserController::class);
      Route::resource('profile', UserProfileController::class);
      Route::get('laporan', [AdminTransaksiController::class, 'indexLaporan']);
      Route::get('chart', [AdminTransaksiController::class, 'indexChart']);
    });

  // MEMBER
  Route::middleware([Client::class])->name('member.')->prefix('member')->group(function () {
      Route::get('/', [HomeController::class, 'index'])->name('index');
      Route::resource('m-layanan', ClientLayananController::class);
      Route::resource('m-order', ClientOrderController::class);
      Route::resource('m-sublayanan', ClientSubLayananController::class);
      Route::resource('profile', UserProfileController::class);
      Route::get('order/{id}', [ClientOrderController::class, 'order']);
    });

  Route::get('/', [HomeController::class, 'index']);

});

Route::get('/verifikasi', function () {
  return view('auth.verify');
});