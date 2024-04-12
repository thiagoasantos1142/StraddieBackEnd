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
        Schema::create('crt_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('credit_rights_title_id');
            $table->string('description')->nullable();            
            $table->string('file_path', 255)->nullable();                     
            $table->string('file_name', 255)->nullable();
            $table->unsignedBigInteger('document_type_id')->nullable();
            $table->timestamps();

            $table->foreign('credit_rights_title_id')->references('id')->on('credit_rights_titles')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('document_type_id')->references('id')->on('document_types')->onDelete('NO ACTION')->onUpdate('NO ACTION');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crt_documents');
    }
};
