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
            $table->string('psychologist', 50)->notNullable;
            $table->string('Document_type')->notNullable;
            $table->string('Document_number')->notNullable;
            $table->string('last_name', 50)->notNullable;
            $table->string('second_last_name', 50)->notNullable;
            $table->date('date_of_birth')->notNullable;
            $table->string('gender')->Nullable;
            $table->string('personal_status', 50)->Nullable;
            $table->string('education', 50)->Nullable;
            $table->string('occupation', 50)->Nullable;
            $table->text('evolution')->Nullable;
            $table->text('motive_for_consultation')->Nullable;
            $table->text('subjective')->Nullable;
            $table->text('mental_test')->Nullable;
            $table->text('purpose_of_the_intervention', )->Nullable;
            $table->text('hypothesis', )->Nullable;
            $table->string('dsmv')->Nullable;
            $table->text('process')->Nullable;
            $table->text('management_plan')->Nullable;
            $table->string('clinical _assessment_of_suicide_risk', 200)->Nullable;
            $table->string('remission', 200)->Nullable;
            $table->foreign('idPsychologist')->references('id')->on('psychologists')->onDelete('cascade');
            $table->foreign('idPatient')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('idDiagnosis')->references('id')->on('diagnoses')->onDelete('cascade');
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
