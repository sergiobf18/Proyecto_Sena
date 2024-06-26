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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPatient');
            $table->unsignedBigInteger('idPsychologist');
            $table->date('appointment_date')->notNull(); 
            $table->string('appointment_status', 50)->notNull();
            $table->text('notes')->nullable(); 
            $table->foreign('idPatient')->references('id')->on('patients')->onDelete('cascade');;
            $table->foreign('idPsychologist')->references('id')->on('psychologists')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
