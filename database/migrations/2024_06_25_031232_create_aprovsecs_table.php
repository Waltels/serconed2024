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
        Schema::create('aprovsecs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('docente_id');
            $table->unsignedBigInteger('trimestre_id');
            $table->unsignedBigInteger('grado_id');
            $table->unsignedBigInteger('area_id');
            $table->integer('c_prog');
            $table->integer('c_des');
            $table->integer('promedio');
        
            $table->foreign('docente_id')
                  ->references('id')
                  ->on('docentes')
                  ->onDelete('cascade');

            $table->foreign('grado_id')
                  ->references('id')
                  ->on('grados')
                  ->onDelete('cascade');

            $table->foreign('trimestre_id')
                  ->references('id')
                  ->on('trimestres')
                  ->onDelete('cascade');

            $table->foreign('area_id')
                  ->references('id')
                  ->on('areas')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprovsecs');
    }
};
