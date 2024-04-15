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
        Schema::create('crt_lawyers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lawyer_id');
            $table->unsignedBigInteger('credit_rights_title_id');
            $table->timestamps();
            
            $table->foreign('lawyer_id')->references('id')->on('lawyers')->onDelete('cascade');
            $table->foreign('credit_rights_title_id')->references('id')->on('credit_right_titles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyer_credit_rights');
    }
};
