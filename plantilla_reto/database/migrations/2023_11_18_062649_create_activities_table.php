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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('lugar');
            $table->float('precio');
            $table->string('imagen');
            $table->integer('valoracion');
            $table->json('comentarios')->nullable(); 
            /*  JSON
            // Para almacenar comentarios
            $comentarios = ['comentario1', 'comentario2'];
            $tarea->comentarios = json_encode($comentarios);
            $tarea->save();

            // Para recuperar comentarios
            $comentariosRecuperados = json_decode($tarea->comentarios, true);
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
