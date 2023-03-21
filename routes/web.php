<?php

use App\Http\Controllers\FaitController;
use App\Models\Fait;
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

Route::get('/', [FaitController::class, 'index'])->name('accueil');

Route::get('/faits', [FaitController::class, 'afficherFaits'])->name('faits');

Route::get('/faits/creer', [FaitController::class, 'create'])->name('creer-fait');

Route::post('/faits/sauvegarder', [FaitController::class, 'store']);

Route::get('/faits/modifier/{id}', [FaitController::class, 'edit'])->name('modifier-fait');

Route::post('/faits/modifier/{id}', [FaitController::class, 'update']);

Route::get('/faits/supprimer/{id}', [FaitController::class, 'destroy']);
