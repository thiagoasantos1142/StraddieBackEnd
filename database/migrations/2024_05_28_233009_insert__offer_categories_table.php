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
        DB::table('offer_categories')->insert([
                    
            ['id' => 1,'title' => 'Valor Principal'],
            ['id' => 2,'title' => 'Valor Honorários']                     
          
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offer_categories', function (Blueprint $table) {
            //
        });
    }
};
