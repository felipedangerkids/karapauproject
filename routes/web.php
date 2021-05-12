<?php

use App\Http\Controllers\Admin\EspecieController;
use App\Http\Controllers\Admin\EstatiscaDiariaController;
use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\Admin\PortoController;
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

Route::get('/home', function () {
    return view('layouts.painel');
});
Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

/*  Painel Routes  */
Route::middleware(['auth', 'permission'])->prefix('admin')->group( function () {
    Route::get('/', [PainelController::class, 'index']);
    Route::get('especies', [PainelController::class, 'especies'])->name('admin.especies');
    Route::get('especies/create', [EspecieController::class, 'create'])->name('admin.especies.create');
    Route::post('especies/store', [EspecieController::class, 'store'])->name('admin.especies.store');
    Route::get('especies/show/{id}', [EspecieController::class, 'show'])->name('admin.especies.show');
    Route::post('especies/update/{id}', [EspecieController::class, 'update'])->name('admin.especies.update');
    Route::any('especies/delete/{id}', [EspecieController::class, 'destroy'])->name('admin.especies.delete');


    Route::get('porto', [PainelController::class, 'porto'])->name('admin.porto');
    Route::get('porto/create', [PortoController::class, 'create'])->name('admin.porto.create');
    Route::post('porto/store', [PortoController::class, 'store'])->name('admin.porto.store');
    Route::any('porto/delete/{id}', [PortoController::class, 'destroy'])->name('admin.porto.delete');
    Route::get('porto/edit/{id}', [PortoController::class, 'edit'])->name('admin.porto.edit');
    Route::post('porto/update/{id}', [PortoController::class, 'update'])->name('admin.porto.update');

    Route::get('estatistica/{id}', [EstatiscaDiariaController::class, 'index'])->name('admin.estatistica');
    Route::post('estatistica/store', [EstatiscaDiariaController::class, 'store'])->name('admin.estatistica.store');
});
    

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
