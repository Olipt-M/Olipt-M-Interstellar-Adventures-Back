<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\ClimateController;
use App\Http\Controllers\JourneyTypeController;
use App\Http\Controllers\ShipController;
use App\Http\Controllers\JourneyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/planets', [PlanetController::class, 'index']); // Afficher les planètes
Route::post('/planets', [PlanetController::class, 'store']); // Créer une planète
Route::delete('/planets/{id}', [PlanetController::class, 'destroy']); // Delete une planète
Route::put('/planets/{id}', [PlanetController::class, 'update']); // Update une planète

Route::get('/climates', [ClimateController::class, 'index']); // Afficher les climats
Route::post('/climates', [ClimateController::class, 'store']); // Créer un climat
Route::delete('/climates/{id}', [ClimateController::class, 'destroy']); // Delete un climat
Route::put('/climates/{id}', [ClimateController::class, 'update']); // Update un climat

Route::get('/journey-types', [JourneyTypeController::class, 'index']); // Afficher les types de voyage
Route::post('/journey-types', [JourneyTypeController::class, 'store']); // Créer un type de voyage
Route::delete('/journey-types/{id}', [JourneyTypeController::class, 'destroy']); // Delete un type de voyage
Route::put('/journey-types/{id}', [JourneyTypeController::class, 'update']); // Update un type de voyage

Route::get('/ships', [ShipController::class, 'index']); // Afficher les vaisseaux
Route::post('/ships', [ShipController::class, 'store']); // Créer un vaisseau
Route::delete('/ships/{id}', [ShipController::class, 'destroy']); // Delete un vaisseau
Route::put('/ships/{id}', [ShipController::class, 'update']); // Update un vaisseau

Route::get('/journeys', [JourneyController::class, 'index']); // Afficher les voyages
Route::post('/journeys', [JourneyController::class, 'store']); // Créer un voyage
Route::delete('/journeys/{id}', [JourneyController::class, 'destroy']); // Delete un voyage
Route::put('/journeys/{id}', [JourneyController::class, 'update']); // Update un voyage
