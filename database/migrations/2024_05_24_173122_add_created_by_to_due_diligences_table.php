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
       

        Schema::table('due_diligences', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by')->nullable();
            
            // Se você quiser adicionar uma chave estrangeira para garantir integridade referencial:
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('due_diligences', function (Blueprint $table) {
            //
        });
    }
};
