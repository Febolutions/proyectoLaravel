<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasilllaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\VotoController;

use App\Http\Controllers\auth\LoginController;

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

Route::resource("candidato", CandidatoController::class);

Route::resource("casilla", CasilllaController::class);

/* LOGIN WITH FACEBOOK */

Route::get('login', [LoginController::class.'index'])->name('login');
Route::get('Login/facebook',[LoginController::class, 'redirectToFacebookProvider'] );
Route::get('login/facebook/callback', [LoginController::class, 'handleProviderFacebookCallback']);
Route::get('logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(fuction(){
    Route::resource('voto', VotoController::class);
});