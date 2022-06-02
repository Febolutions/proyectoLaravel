<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasilllaController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\EleccionController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\HighChartController;
use App\Http\Controllers\HomeController;

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
Route::get('/phpinfo', function () {
    phpinfo();
});
Route::get('casilla/pdf','CasilllaController@generatepdf');
Route::resource("candidato", CandidatoController::class);
Route::resource("casilla", CasilllaController::class);
Route::resource("voto", VotoController::class);
Route::resource("eleccion", EleccionController::class);

/* LOGIN WITH FACEBOOK */

Route::get('login', [LoginController::class.'index'])->name('login');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index');

Route::get('/login/facebook', 'App\Http\Controllers\Auth\LoginController@redirectToFacebookProvider');
Route::get('/login/facebook/callback', 'App\Http\Controllers\Auth\LoginController@handleProviderFacebookCallback');
Route::get('logout', [LoginController::class, 'logout']);
//Route::get('logout', [LoginController::class.'logout'])->name('logout');


/* PDF ROUTE */
Route::get('casilla/pdf','CasilllaController@generatepdf');

/* FORMA 2 DE GENERAR PDF*/
//Route::get('generate-PD', [PDFController::class, 'generatePDF']);
Route::get('PDF/myPDF','PDFController@generatePDF');
//Route::get('casilla/pdfList','PDFController@generatePDF');

/* HIGHCHART GRAPHIC */
Route::get('grafica-votos', [HighChartController::class, 'index']);

/* HOME ROUTE */
Route::get('home', [HomeController::class, 'index']);

/* cambios que hizo el profe */
//Route::get('login', [LoginController::class.'index'])->name('login');
//Route::get('/login', 'App\Http\Controllers\Auth\LoginController@index');

//Route::get('login/facebook', [LoginController::class, 'redirectToFacebookProvider']);
//Route::get('login/facebook/callback', [LoginController::class,'handleProviderFacebookCallback']);
//Route::get('logout', [LoginController::class, 'logout']);


Route::middleware(['auth'])->group(function(){
 //  Route::resource('voto', VotoController::class);
//     Route::get('logout', [LoginController::class, 'logout']);
//Route::get('logout', [LoginController::class.'logout'])->name('logout');
});