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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->unsignedBigInteger('credit_rights_title_id')->nullable();
            $table->unsignedBigInteger('due_diligence_id')->nullable();    
            $table->unsignedBigInteger('uploaded_by')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();            
            $table->unsignedBigInteger('category_id')->nullable();                    
            $table->unsignedBigInteger('status_id')->nullable();
            
            $table->string('title', 55)->nullable();    
            $table->string('description',  255)->nullable();            
            $table->string('path', 255)->nullable();                     
            $table->string('filename', 255)->nullable();                        
            $table->string('file_format', 255)->nullable();
                             

            $table->timestamps();

            // Chaves estrangeiras
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');           
            $table->foreign('credit_rights_title_id')->references('id')->on('credit_rights_titles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('due_diligence_id')->references('id')->on('due_diligences')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('file_categories')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            $table->foreign('type_id')->references('id')->on('file_types')->onDelete('NO ACTION')->onUpdate('NO ACTION');            
            $table->foreign('uploaded_by')->references('id')->on('users')->onDelete('NO ACTION')->onUpdate('NO ACTION');            
            $table->foreign('status_id')->references('id')->on('file_statuses')->onDelete('NO ACTION')->onUpdate('NO ACTION');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
