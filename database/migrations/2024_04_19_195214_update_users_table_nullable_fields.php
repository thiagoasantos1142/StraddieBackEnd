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
        Schema::table('users', function (Blueprint $table) {
            // Permitir valores nulos para os campos CPF e email
            $table->string('cpf')->nullable()->change();
            $table->string('email')->nullable()->change();
            
            $table->string('password')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Reverter as alterações se necessário
            $table->string('cpf')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            
            $table->string('password')->nullable(false)->change();
        });
    }
};
