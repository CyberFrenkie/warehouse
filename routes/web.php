<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InController;
use App\Http\Controllers\OutController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\StockController;

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
    return view('index');
});



Route::get('/in', [InController::class, 'index'])->name('in.index');
Route::get('/out', [OutController::class, 'index'])->name('out.index');
Route::get('/stock', [StockController::class, 'index'])->name('stock.index');

Route::get('in/create', [InController::class, 'create'])->name('in.create');
Route::resource('in', InController::class)->except(['create']);

Route::get('out/create', [OutController::class, 'create'])->name('out.create');
Route::resource('out', OutController::class)->except(['create']);


// Route::get('/upload-form', [ExcelController::class, 'showForm'])->name('upload.form');
Route::post('/upload-excel', [ExcelController::class, 'upload'])->name('upload.excel');


Route::get('/export', [ExcelController::class ,'export'])->name('export');

