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
        Schema::create('court_varas', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);   
            
            $table->string('uf', 2);           
            $table->unsignedBigInteger('court_id');          
            $table->foreign('court_id')->references('id')->on('courts')->onDelete('cascade')->onUpdate('cascade'); 
            
              
            $table->timestamps();               
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nature_obligations');
    }
};
