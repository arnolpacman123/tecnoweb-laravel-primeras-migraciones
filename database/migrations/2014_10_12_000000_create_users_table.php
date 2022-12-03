<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres')->nullable(false);
            $table->string('apellidos')->nullable(false);
            $table->string('numero_registro')->nullable(false)->unique();
            $table->string('contrasena')->nullable(false);
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->foreignId('tipo_usuario_id')->constrained('tipo_usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
