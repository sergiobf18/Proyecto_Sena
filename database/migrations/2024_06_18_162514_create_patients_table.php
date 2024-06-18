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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('Document_type')->notNullable;
            $table->string('Document_number')->notNullable;
            $table->string('name', 50)->notNullable;
            $table->string('last_name', 50)->notNullable;
            $table->string('second_last_name', 50)->notNullable;
            $table->date('date_of_birth')->notNullable;
            $table->string('gender', 50)->Nullable;
            $table->string('personal_status', 50)->Nullable;
            $table->string('education', 50)->Nullable;
            $table->string('occupation', 50)->Nullable;
            $table->string('email', 50)->Nullable;
            $table->string('phone_number', 50)->notNullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
