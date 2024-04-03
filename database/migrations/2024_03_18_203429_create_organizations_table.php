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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('entidade_type_id');
            $table->string('cnpj')->nullable();
            $table->string('main_CNAE')->nullable();
            $table->string('nome_fantasia');
            $table->string('razao_social')->nullable();            
            $table->string('description')->nullable();
            $table->string('state_registration')->nullable();
            $table->string('municipal_registration')->nullable();            
            $table->string('website')->nullable();
            
            $table->string('logo')->nullable();
            $table->date('cnpj_opening_date')->nullable();
            $table->timestamps();

            $table->foreign('entidade_type_id')->references('id')->on('entidade_types')->onDelete('NO ACTION')->onUpdate('NO ACTION');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
