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
           
            //$table->foreignId('crt_type_id')->nullable()->constrained('crt_types');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('credit_rights_titles', function (Blueprint $table) {
            $table->dropForeign(['crt_type_id']);
            $table->dropColumn('crt_type_id');
        });
    }
};
