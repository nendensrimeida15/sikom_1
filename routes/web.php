<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;

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

// Route::get('/', function () {
//     return view('_template_back.layout');
// });

Route::get('/',[LoginController::class, 'login'])->name('login');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
Route::post('auth',[LoginController::class, 'auth'])->name('auth');// Untuk login

//ROUTE crud buku
Route::resource('buku', BukuController::class)->middleware('auth');//melempar user yang belum login bagi yang belum login
Route::get('export_pdf_buku',[BukuController::class, 'export_pdf'])->name('export_pdf_buku')->middleware('role:administrator');//menambah route buku pdf
Route::get('export_excel_buku',[BukuController::class, 'export_excel'])->name('export_excel_buku');//menambah route export excel
Route::post('import_excel_buku',[BukuController::class, 'import_excel'])->name('import_excel_buku')->middleware('role:administrator');//menambah route import excel

//ROUTE PEMINJAMAN
Route::resource('peminjaman', PeminjamanController::class);