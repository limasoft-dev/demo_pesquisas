<?php

use App\Livewire\Front\EventosList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExporteventosController;
use App\Http\Controllers\ImporteventosController;

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

Route::get('/', EventosList::class)->name('home');

//Importação de eventos
Route::get('importeventos', [ImporteventosController::class, 'index'])->name('importeventos');
Route::post('importeventos', [ImporteventosController::class, 'store'])->name('importeventos.store');
Route::get('limpar', [ImporteventosController::class, 'limpar'])->name('limpareventos');

//Exportação de eventos
Route::get('exporteventos', [ExporteventosController::class, 'export'])->name('exporteventos');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
