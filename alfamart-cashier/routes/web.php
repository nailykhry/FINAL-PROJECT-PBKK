<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\TransactionController;

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

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('transaksi', [TransactionController::class, 'index']);
Route::post('/pembayaran', [TransactionController::class, 'pembayaran']);
Route::get('/halaman-pembayaran', [TransactionController::class, 'payment']);
Route::post('/update-transaction', [TransactionController::class, 'update']);

Route::post('/search-product', [ProductController::class, 'search']);

Route::get('inventaris', [InventarisController::class, 'index']);
