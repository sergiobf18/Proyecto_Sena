<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admission_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPatient');
            $table->unsignedBigInteger('idPsychologist');
            $table->unsignedBigInteger('idDiagnosis');
            $table->date('adhistory_date')->notNull(); 
            $table->foreign('idPsychologist')->references('id')->on('psychologists');
            $table->foreign('idPatient')->references('id')->on('patients');
            $table->foreign('idDiagnosis')->references('id')->on('diagnoses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_histories');
    }
};
