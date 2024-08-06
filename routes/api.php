<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Api\PsychologistapiController;
use app\Http\Controllers\Api\PatientapiController;
use app\Http\Controllers\Api\DiagnosisApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('psychologists', App\Http\Controllers\Api\PsychologistapiController::class);
Route::apiResource('patients', App\Http\Controllers\Api\PatientapiController::class);
Route::apiResource('diagnoses',  App\Http\Controllers\Api\DiagnosisApiController::class);
Route::apiResource('appointments',  App\Http\Controllers\Api\AppointmentapiController::class);
