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

           // $table->dropConstrainedForeignId('statuses_id');

        });
            
        Schema::table('due_diligences', function (Blueprint $table) {
          //  $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id')->references('id')->on('due_diligence_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('due_diligences', function (Blueprint $table) {
            $table->renameColumn('status_id', 'statuses_id');
        });
    }
};
