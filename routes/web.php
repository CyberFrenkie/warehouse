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
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/facility', function () {
    return view('facility.facility');
});

Route::get('/warehouse', function () {
    return view('warehouse.warehouse');
});


Route::get('/nf', function () {
    return view('facility.nf.nf');
});

Route::get('/of', function () {
    return view('facility.old.of');
});



// --------- WAREHOUSE --------------


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

Route::get('/stock/{id}/edit', [StockController::class, 'edit'])->name('stock.edit');
Route::put('/stock/{id}', [StockController::class, 'update'])->name('stock.update');
Route::delete('/stock/{id}', [StockController::class, 'destroy'])->name('stock.destroy');


Route::get('/stock/filter', [StockController::class, 'filter'])->name('stock.filter');
