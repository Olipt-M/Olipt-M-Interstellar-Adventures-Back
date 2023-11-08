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

Route::prefix('planets')->group(function () {
    Route::get('/', [PlanetController::class, 'index']); // Afficher les planètes
    Route::get('/{id}', [PlanetController::class, 'show']); // Afficher une planète
    Route::post('/', [PlanetController::class, 'store']); // Créer une planète
    Route::delete('/{id}', [PlanetController::class, 'destroy']); // Delete une planète
    Route::put('/{id}', [PlanetController::class, 'update']); // Update une planète
});

Route::prefix('climates')->group(function () {
    Route::get('/', [ClimateController::class, 'index']); // Afficher les climats
    Route::get('/{id}', [ClimateController::class, 'show']); // Afficher un climat
    Route::post('/', [ClimateController::class, 'store']); // Créer un climat
    Route::delete('/{id}', [ClimateController::class, 'destroy']); // Delete un climat
    Route::put('/{id}', [ClimateController::class, 'update']); // Update un climat
});

Route::prefix('journey-types')->group(function () {
    Route::get('/', [JourneyTypeController::class, 'index']); // Afficher les types de voyage
    Route::get('/{id}', [JourneyTypeController::class, 'show']); // Afficher un type de voyage
    Route::post('/', [JourneyTypeController::class, 'store']); // Créer un type de voyage
    Route::delete('/{id}', [JourneyTypeController::class, 'destroy']); // Delete un type de voyage
    Route::put('/{id}', [JourneyTypeController::class, 'update']); // Update un type de voyage
});

Route::prefix('ships')->group(function () {
    Route::get('/', [ShipController::class, 'index']); // Afficher les vaisseaux
    Route::get('/{id}', [ShipController::class, 'show']); // Afficher un vaisseau
    Route::post('/', [ShipController::class, 'store']); // Créer un vaisseau
    Route::delete('/{id}', [ShipController::class, 'destroy']); // Delete un vaisseau
    Route::put('/{id}', [ShipController::class, 'update']); // Update un vaisseau
});

Route::prefix('journeys')->group(function () {
    Route::get('/', [JourneyController::class, 'index']); // Afficher les voyages
    Route::get('/{id}', [JourneyController::class, 'show']); // Afficher un voyage
    Route::post('/', [JourneyController::class, 'store']); // Créer un voyage
    Route::delete('/{id}', [JourneyController::class, 'destroy']); // Delete un voyage
    Route::put('/{id}', [JourneyController::class, 'update']); // Update un voyage
});

