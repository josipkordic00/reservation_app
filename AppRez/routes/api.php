<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// evidencija
Route::post('/evidencija/dodaj', [EvidencijaController::class, 'create']);
Route::post('/evidencija/uredi/{id}', [EvidencijaController::class, 'edit']);
Route::get('/evidencija/dohvati', [EvidencijaController::class, 'index']);
Route::get('/evidencija/izbrisi/{id}', [EvidencijaController::class, 'destroy']);

// ucenik
Route::post('/ucenik/dodaj', [UcenikController::class, 'create']);
Route::post('/ucenik/uredi/{id}', [UcenikController::class, 'edit']);
Route::get('/ucenik/dohvati', [UcenikController::class, 'index']);
Route::get('/ucenik/izbrisi/{id}', [UcenikController::class, 'destroy']);

// Nastavnik
Route::post('/nastavnik/dodaj', [NastavnikController::class, 'create']);
Route::post('/nastavnik/uredi/{id}', [NastavnikController::class, 'edit']);
Route::get('/nastavnik/dohvati', [NastavnikController::class, 'index']);
Route::get('/nastavnik/izbrisi/{id}', [NastavnikController::class, 'destroy']);

// Ustanova
Route::post('/ustanova/dodaj', [UstanovaController::class, 'create']);
Route::post('/ustanova/uredi/{id}', [UstanovaController::class, 'edit']);
Route::get('/ustanova/dohvati', [UstanovaController::class, 'index']);
Route::get('/ustanova/izbrisi/{id}', [UstanovaController::class, 'destroy']);

// Ucionica
Route::post('/ucionica/dodaj', [UcionicaController::class, 'create']);
Route::post('/ucionica/uredi/{id}', [UcionicaController::class, 'edit']);
Route::get('/ucionica/dohvati', [UcionicaController::class, 'index']);
Route::get('/ucionica/izbrisi/{id}', [UcionicaController::class, 'destroy']);

// Obavijesti
Route::post('/obavijesti/dodaj', [ObavijestiController::class, 'create']);
Route::post('/obavijesti/uredi/{id}', [ObavijestiController::class, 'edit']);
Route::get('/obavijesti/dohvati', [ObavijestiController::class, 'index']);
Route::get('/obavijesti/izbrisi/{id}', [ObavijestiController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
