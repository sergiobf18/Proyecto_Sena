<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmissionHistoryController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\FollowUpHistoryController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PsychologistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Rutas del proyecto
    Route::resource('/dashboard/admissionHistory',AdmissionHistoryController::class);
    Route::resource('/dashboard/appointment',AppointmentController::class);
    Route::resource('/dashboard/diagnosis',DiagnosisController::class);
    Route::resource('/dashboard/followUpHistory',FollowUpHistoryController::class);
    Route::resource('/dashboard/psychologist',PsychologistController::class);
    Route::resource('/dashboard/patient',PatientController::class);
    



require __DIR__.'/auth.php';
