<?php

use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class,'home']
)->name('welcome');

Route::get('/marche',[PublicController::class,'marche']
)->name('marche');

Route::get('/marche/dettaglio/{name}',[PublicController::class,'dettaglio']
)->name('marche.dettaglio');

Route::get('/prezzi',[PublicController::class,'prezzi']
)->name('prezzi');

Route::get('/chisiamo',[PublicController::class,'chisiamo']
)->name('chisiamo');