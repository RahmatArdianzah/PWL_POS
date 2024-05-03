<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
Route::get('/kategori', [KategoriController::class, 'index']);
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);

Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/kategori/create', [KategoriController::class, 'create']);

Route::get('/kategori/edit', [KategoriController::class, 'edit']);

// Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus']);
Route::get('/', [WelcomeController::class, 'index']);
// // Route::get('/kategori/delete', [KategoriController::class, 'kategori']);
// Route::get('/kategori/edit',[KategoriController::class, 'edit']);
// Route::put('/kategori/edit_simpan/{$id}', [KategoriController::class, 'edit_simpan']);
// Route::put('/kategori/update/{id}',[KategoriController::class, 'update'])->name('kategori.update');
// // Route::get('/kategori/delete/{id}',[KategoriController::class, 'delete'])->name('kategori.destroy');

// // Route::delete('/kategori/{kategori}', 'KategoriController@destroy')->name('kategories.destroy');
// // Route::delete('/kategori/{id}', function ($id) {
// //     KategoriController::destroy($id);
// // })->name('kategories.destroy');

// Route::get('/kategori/delete', [KategoriController::class, 'index'])->name('kategori.delete');

// Route::get('/', [WelcomeController::class, 'index']);

// Route::group(['prefix' => 'barang'], function () {
//     Route::get('/', [BarangController::class, 'index']);          // menampilkan halaman awal level
//     Route::post('/list', [BarangController::class, 'list']);      // menampilkan data level dalam bentuk json untuk datatables
//     Route::get('/create', [BarangController::class, 'create']);   // menampilkan halaman form tambah level
//     Route::post('/', [BarangController::class, 'store']);         // menyimpan data level baru
//     Route::get('/{id}', [BarangController::class, 'show']);       // menampilkan detail level
//     Route::get('/{id}/edit', [BarangController::class, 'edit']);  // menampilkan halaman form edit level
//     Route::post('/{id}', [BarangController::class, 'update']);     // menyimpan perubahan data level
//     Route::delete('/{id}', [BarangController::class, 'destroy']); // menghapus data level
// });
// Route::group(['prefix' => 'stok'], function () {
//     Route::get('/', [StokController::class, 'index']);          // menampilkan halaman awal level
//     Route::post('/list', [StokController::class, 'list']);      //menampilkan data level dalam bentuk json untuk datatables
//     Route::get('/create', [StokController::class, 'create']);   // menampilkan halaman form tambah level
//     Route::post('/', [StokController::class, 'store']);         // menyimpan data level baru
//     Route::get('/{id}', [StokController::class, 'show']);       // menampilkan detail level
//     Route::get('/{id}/edit', [StokController::class, 'edit']);  // menampilkan halaman form edit level
//     Route::post('/{id}', [StokController::class, 'update']);     // menyimpan perubahan data level
//     Route::delete('/{id}', [StokController::class, 'destroy']); // menghapus data level
// });
// Route::group(['prefix' => 'penjualan'], function () {
//     Route::get('/', [PenjualanController::class, 'index']);          // menampilkan halaman awal level
//     Route::post('/list', [PenjualanController::class, 'list']);      //menampilkan data level dalam bentuk json untuk datatables
//     Route::get('/create', [PenjualanController::class, 'create']);   // menampilkan halaman form tambah level
//     Route::post('/', [PenjualanController::class, 'store']);         // menyimpan data level baru
//     Route::get('/{id}', [PenjualanController::class, 'show']);       // menampilkan detail level
//     Route::get('/{id}/edit', [PenjualanController::class, 'edit']);  // menampilkan halaman form edit level
//     Route::post('/{id}', [PenjualanController::class, 'update']);     // menyimpan perubahan data level
//     Route::delete('/{id}', [PenjualanController::class, 'destroy']); // menghapus data level
// });

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
