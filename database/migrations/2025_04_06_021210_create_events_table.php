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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->text('title');
            $table->text('image');
            $table->text('description')->nullable();
            $table->text('reason')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->integer('price');
            $table->string('place');
            $table->enum('state', [
                'Abierto',
                'Cerrado',
                'Cancelado'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
