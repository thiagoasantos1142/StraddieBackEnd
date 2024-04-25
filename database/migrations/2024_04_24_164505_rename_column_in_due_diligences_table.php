<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Primeiro, remova a restrição de chave estrangeira
        Schema::table('due_diligences', function (Blueprint $table) {
            $table->dropConstrainedForeignId('due_diligence_statuses_id');

            $table->foreignId('statuses_id')->nullable()->constrained('due_diligence_statuses');
            
        });

        Schema::table('due_diligences', function (Blueprint $table) {
           

            //$table->foreignId('statuses_id')->nullable()->constrained('due_diligence_statuses');
            
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
