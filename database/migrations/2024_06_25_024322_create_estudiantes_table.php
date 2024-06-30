<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Estudiante;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('rude');
            $table->string('name');
            $table->unsignedBigInteger('dato_id');
            $table->unsignedBigInteger('nivel_id');
            $table->unsignedBigInteger('grado_id');
            $table->unsignedBigInteger('area_id');
            $table->enum('estado_est',[Estudiante::Retirado_Traslado, Estudiante::Retirado_Abandono, Estudiante::Efectivo])->default(Estudiante::Efectivo);

            $table->foreign('dato_id')
                  ->references('id')
                  ->on('datos')
                  ->onDelete('cascade');
            $table->foreign('nivel_id')
                  ->references('id')
                  ->on('nivels')
                  ->onDelete('cascade');
            $table->foreign('grado_id')
                  ->references('id')
                  ->on('grados')
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
        Schema::dropIfExists('estudiantes');
    }
};
