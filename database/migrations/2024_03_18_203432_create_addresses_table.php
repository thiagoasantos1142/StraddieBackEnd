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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('street');
            $table->string('zip')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('street_number')->nullable();
            $table->string('complement')->nullable();     
           
            $table->timestamps();

            // Define as chaves estrangeiras
            $table->foreign('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('organization_id')->nullable()->constrained('organizations');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
