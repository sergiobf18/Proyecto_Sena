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
        Schema::create('follow_uphistories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPatient');
            $table->unsignedBigInteger('idPsychologist');
            $table->unsignedBigInteger('idDiagnosis');
            $table->date('fhistory_date')->notNull();
            $table->string('psychologist', 50)->notNullable;
            $table->enum('Document_type',['CC','TI','Pasaporte']);
            $table->string('last_name', 50)->notNullable;
            $table->string('second_last_name', 50)->notNullable;
            $table->date('date_of_birth')->notNullable;
            $table->enum('gender', ['Hombre', 'Femenino', 'Otro'])->Nullable;
            $table->string('personal_status', 50)->Nullable;
            $table->string('education', 50)->Nullable;
            $table->string('occupation', 50)->Nullable;
            $table->string('evolution', 50)->Nullable;
            $table->string('motive_for_consultation', 200)->Nullable;
            $table->string('subjective', 200)->Nullable;
            $table->string('mental_test', 200)->Nullable;
            $table->string('purpose_of_the_intervention', 200)->Nullable;
            $table->string('hypothesis', 200)->Nullable;
            $table->string('dsmv', 200)->Nullable;
            $table->string('process', 200)->Nullable;
            $table->string('management_plan', 200)->Nullable;
            $table->string('clinical _assessment_of_suicide_risk', 200)->Nullable;
            $table->string('remission', 200)->Nullable;
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
        Schema::dropIfExists('follow_uphistories');
    }
};
