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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dato_id');
            $table->integer('rda');
            $table->string('funcion');
            $table->integer('item');
            $table->integer('antiguedad');
            $table->boolean('estado_doc')->default(false);

            $table->foreign('dato_id')
                  ->references('id')
                  ->on('datos')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
