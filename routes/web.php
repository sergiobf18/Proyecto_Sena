<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmissionHistoryController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\FollowUpHistoryController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PsychologistController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Api\PsychologistapiController;
use App\Http\Controllers\UsuarioController;

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
    Route::resource('dashboard/admissionHistory',AdmissionHistoryController::class);
    Route::resource('dashboard/appointment',AppointmentController::class);
    Route::resource('dashboard/diagnosis',DiagnosisController::class);
    Route::resource('dashboard/followUpHistory',FollowUpHistoryController::class);
    Route::resource('dashboard/psychologist',PsychologistController::class);
    Route::resource('dashboard/patient',PatientController::class);
    Route::resource('dashboard/document',DocumentController::class);
    
    //Ruta roles
    Route::resource('dashboard/role',RoleController::class);
    Route::resource('dashboard/roles', RoleController::class);
    Route::resource('dashboard/usuario', UsuarioController::class);
    
    // Api
    Route::get('/admissionHistory/pdf/{id}', [App\Http\Controllers\AdmissionHistoryController::class, 'generatePDF'])->name('admissionHistory.pdf');
    Route::get('/psychologists', [PsychologistapiController::class, 'index']);

    // routes alerta/web.php
Route::get('patient/message', [PatientController::class, 'message'])->name('patient.message');
Route::get('appointment/message', [AppointmentController::class, 'message'])->name('appointment.message');
// Ruta para la lista de pacientes
Route::resource('appointment', AppointmentController::class);
Route::resource('psychologists', PsychologistController::class);
Route::resource('diagnosis', DiagnosisController::class);

Route::post('/admission-history', [AdmissionHistoryController::class, 'store'])->name('admissionHistory.store');



require __DIR__.'/auth.php';
