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
            // Permitir valores nulos para os campos title
            $table->string('title')->nullable()->change();
            $table->foreignId('credit_rights_title_id')->nullable()->constrained('credit_rights_titles');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
