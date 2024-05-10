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
                      
            $table->dropColumn('updated_value');
            $table->dropColumn('negotiated_value');
            $table->decimal('negotiated_main_value', 16, 2)->nullable();   
            
            $table->decimal('negotiated_fee_value', 16, 2)->nullable();             
            $table->decimal('updated_main_value', 16, 2)->nullable(); 
            $table->decimal('updated_fee_value', 16, 2)->nullable();  
                     
         
            
	        $table->string('title', 50)->nullable()->change();

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
