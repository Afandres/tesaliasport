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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->enum('document_type', [
                'Cédula de ciudadanía',
                'Tarjeta de identidad',
                'Cédula de extranjería'
            ]);
            $table->integer('document_number')->unique();
            $table->string('name');
            $table->integer('age');
            $table->enum('sex', [
                'Masculino',
                'Femenino',
                'Otro'
            ]);
            $table->string('email')->unique();
            $table->enum('blood_type',[
                'No registra',
                'O+',
                'O-',
                'A+',
                'A-',
                'B+',
                'B-',
                'AB+',
                'AB-'
            ])->nullable();
            $table->integer('telephone');
            $table->string('country');
            $table->string('department');
            $table->string('municipality');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
