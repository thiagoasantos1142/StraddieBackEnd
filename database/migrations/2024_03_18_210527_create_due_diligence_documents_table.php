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
        Schema::create('due_diligence_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('organization_id');
            $table->unsignedBigInteger('due_diligence_id');
            $table->unsignedBigInteger('document_type_id');
            $table->unsignedBigInteger('document_status_id');
            $table->string('title', 255);
            $table->string('description', 45)->nullable();
            $table->timestamps();
            $table->string('stored_link', 3000)->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->foreign('due_diligence_id')->references('id')->on('due_diligence')->onDelete('cascade');
            // $table->foreign('document_type_id')->references('id')->on('due_diligence_documents_type')->onDelete('cascade');
            $table->foreign('document_status_id')->references('id')->on('due_diligence_documents_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('due_diligence_documents');
    }
};
