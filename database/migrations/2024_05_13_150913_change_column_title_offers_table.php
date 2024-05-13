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
        Schema::table('offers', function (Blueprint $table) {
          
            //$table->dropConstrainedForeignId('offer_category_id');
           //$table->dropConstrainedForeignId('offer_status_id');
           

        }); 
            

        Schema::table('offers', function (Blueprint $table) {

            $table->string('title')->nullable()->change();
            //$table->foreignId('offer_category_id')->constrained('offer_categories')->nullable();
            $table->foreignId('status_id')->constrained('offer_statuses')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            //
        });
    }
};
