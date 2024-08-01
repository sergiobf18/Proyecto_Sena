<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Api\PsychologistapiController;
use app\Http\Controllers\Api\PatientapiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('psychologist', PsychologistapiController::class,);
Route::apiResource('patient', PatientapiController::class);
