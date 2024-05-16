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
        Schema::table('credit_rights_titles', function (Blueprint $table) {
          
            $table->string('title', 255)->nullable()->change();
            
            $table->string('class', 255)->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('credit_rights_titles', function (Blueprint $table) {
            //
        });
    }
};
