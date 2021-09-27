<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\EntreeController;
use App\Http\Controllers\SortieController;
use App\Http\Controllers\SituationController;
use App\Http\Controllers\SuiviController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\FournisseurController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('gestion')->group(function() {
    Route::resource('partenaires', PartenaireController::class);
    Route::resource('fournisseurs', FournisseurController::class);
    Route::get('fourniseurs/suivis', [SuiviController::class, 'index'])->name('fournisseurs.suivi');
    Route::get('fourniseurs/search', [SuiviController::class, 'search'])->name('fournisseurs.search');
    Route::resource('stocks/entrees', EntreeController::class);
    Route::resource('stocks/sorties', SortieController::class);
    Route::get('stocks/situation', [SituationController::class, 'index'])->name('stocks.index');
    Route::resource('achats', AchatController::class);
});