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
        Schema::table('available_assets', function (Blueprint $table) {
            
            $table->dropConstrainedForeignId('due_diligence_id');
          
           
        });
        

        Schema::table('available_assets', function (Blueprint $table) {

   
            $table->foreignId('due_diligence_id')->constrained('due_diligences');
            // Adicionando índice à coluna 'due_diligence_id'
            $table->index('due_diligence_id');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('available_assets', function (Blueprint $table) {
            //
        });
    }
};
