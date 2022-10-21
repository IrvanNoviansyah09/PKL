<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\Statuspb;
use App\Http\Controllers\TbumumController;
use App\Http\Controllers\TbolahragaController;
use App\Http\Controllers\TbmediaController;
use App\Http\Controllers\TbpanahanController;
use App\Http\Controllers\UmumController;
use App\Models\Inventaris;
use App\Models\Peminjaman;

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

Route::get('/beranda', function () {
    return view('dashboard.beranda');
});

Route::get('/login', function () {
    return view('user.login');
})->name('login');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/databarang', [Statuspb::class, 'index']);

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/ajuan', [PeminjamanController::class, 'pinjam']);
    Route::post('/simpantbumum', [TbumumController::class, 'postUmum']);
    Route::get('/simpantbumum/{id}/edit', [TbumumController::class, 'edit']);
    Route::put('/simpantbumum/{id}', [TbumumController::class, 'update']);
    Route::delete('/delete1/{id}', [TbumumController::class, 'destroy']);

    Route::post('/simpantbolahraga', [TbolahragaController::class, 'postOlahraga']);
    Route::get('/simpantbolahraga/{id}/edit', [TbolahragaController::class, 'edit']);
    Route::put('/simpantbolahraga/{id}', [TbolahragaController::class, 'update']);
    Route::delete('/delete2/{id}', [TbolahragaController::class, 'destroy']);

    Route::post('/simpantbmedia', [TbmediaController::class, 'postMedia']);
    Route::get('/simpantbmedia/{id}/edit', [TbmediaController::class, 'edit']);
    Route::put('/simpantbmedia/{id}', [TbmediaController::class, 'update']);
    Route::delete('/delete3/{id}', [TbmediaController::class, 'destroy']);

    Route::post('/simpantbpanahan', [TbpanahanController::class, 'postPanahan']);
    Route::get('/simpantbpanahan/{id}/edit', [TbpanahanController::class, 'edit']);
    Route::put('/simpantbpanahan/{id}', [TbpanahanController::class, 'update']);
    Route::delete('/delete4/{id}', [TbpanahanController::class, 'destroy']);

    Route::get('/create/{id}/setuju', [UmumController::class, 'setuju']);
    Route::get('/create/{id}/tolak', [UmumController::class, 'tolak']);

    Route::get('/inventaris', [InventarisController::class, 'index']);
    Route::get('/setujus/{id}', [PeminjamanController::class, 'setuju']);

    Route::get('/create1', function () {
        return view('dashboard.inventaris.umum.create1');
    });
    Route::get('/olahraga', function () {
        return view('dashboard.inventaris.olahraga.olahraga');
    });
    Route::get('/media', function () {
        return view('dashboard.inventaris.media.media');
    });
    Route::get('/panahan', function () {
        return view('dashboard.inventaris.panahan.panahan');
    });
    Route::get('/create', [UmumController::class, 'create']);
    Route::post('/create/store', [UmumController::class, 'store']);
    Route::get('/pengajuan', function () {
        return view('dashboard.pengajuan.pengajuan');
    });
    Route::get('/barang', [BarangController::class, 'index']);

});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
    
});
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/pinjam', [PeminjamanController::class, 'index']);
Route::post('/pinjam/store', [PeminjamanController::class, 'store']);
Route::get('/cetak/{id}', [InventarisController::class, 'surat']);

Route::get('/create', function () {
    return view('dashboard.inventaris.umum.create');
});
Route::get('/olahraga', function () {
    return view('dashboard.inventaris.olahraga.olahraga');
});
Route::get('/media', function () {
    return view('dashboard.inventaris.media.media');
});
Route::get('/panahan', function () {
    return view('dashboard.inventaris.panahan.panahan');
});
Route::get('/create', [UmumController::class, 'create']);
Route::post('/create/store', [UmumController::class, 'store']);
Route::get('/pengajuan', function () {
    return view('dashboard.pengajuan.pengajuan');
});

Route::get('/barang', [BarangController::class, 'index']);
