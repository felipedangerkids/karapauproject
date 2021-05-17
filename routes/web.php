<?php

use App\Models\CompradorIndividual;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Admin\PortoController;
use App\Http\Controllers\Admin\PainelController;
use App\Http\Controllers\Admin\EspecieController;

use App\Http\Controllers\Auth\LoginConsultorController;

use App\Http\Controllers\Admin\EstatiscaDiariaController;
use App\Http\Controllers\Auth\CompradorColetivoController;
use App\Http\Controllers\Auth\CompradorIndividualController;
use App\Http\Controllers\Auth\PescadorController;
use App\Http\Controllers\Auth\PescadorRegController;
use App\Http\Controllers\Comercial\ComercialPainelController;
use App\Http\Controllers\Pescador\PainelPescadorController;

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
    return view('auth.login');
});

Route::get('consultor-login', function(){
    return view('auth.consultor.login');
});

Auth::routes();

/*  Painel Routes  */
Route::middleware(['auth'])->prefix('admin')->group( function () {
    Route::get('/home', [PainelController::class, 'index']);
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
    Route::any('porto/update/status/{id}', [PortoController::class, 'status'])->name('admin.porto.update.status');

    Route::get('estatistica/{id}', [EstatiscaDiariaController::class, 'index'])->name('admin.estatistica');
    Route::post('estatistica/store', [EstatiscaDiariaController::class, 'store'])->name('admin.estatistica.store');


    Route::get('consultor', [PainelController::class, 'consultores'])->name('admin.consultores');
    Route::post('consultor-store', [LoginConsultorController::class, 'store'])->name('admin.consultores.store');
    Route::any('consultor-delete/{id}', [LoginConsultorController::class, 'destroy'])->name('admin.consultores.delete');
});
    

Route::get('consultor-login', [LoginConsultorController::class, 'index']);
Route::post('consultor-entrar', [LoginConsultorController::class, 'login'])->name('consultor.login');






Route::middleware(['auth:consultor'])->group(function () {
        Route::get('consultor', [ComercialPainelController::class, 'index'])->name('consultor');
        Route::get('comprador-cad', [ComercialPainelController::class, 'compradorCad']);
        Route::get('comprador-individual-create', [CompradorIndividualController::class, 'index'])->name('consultor.comprador-individual.create');
        Route::post('comprador-individual-store', [CompradorIndividualController::class, 'store'])->name('consultor.comprador-individual.store');

        Route::get('comprador-coletivo-create', [CompradorColetivoController::class, 'index'])->name('consultor.comprador-coletivo.create');
        Route::post('comprador-coletivo-store', [CompradorColetivoController::class, 'store'])->name('consultor.comprador-coletivo.store');
    });

Route::get('teste', [TesteController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*  Login Pescador */

Route::get('login-pescador', [PescadorController::class, 'index']);
Route::get('pescador-create', [PescadorRegController::class, 'index']);
Route::post('pescadores-store', [PescadorRegController::class, 'store'])->name('pescador.store');
Route::post('pescador-login', [PescadorController::class, 'store'])->name('pescador.login');


Route::middleware('auth:pescador')->group(function(){
    Route::get('pescador', [PainelPescadorController::class, 'index']);
});