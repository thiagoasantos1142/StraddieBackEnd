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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable();
            $table->unsignedBigInteger('organizations_id')->nullable();            
            $table->unsignedBigInteger('user_id');
            $table->decimal('value', 16, 2)->nullable();
            $table->date('offer_date')->nullable();
            $table->date('offer_deadline')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->integer('installments')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('available_assets_id');
            $table->timestamps();
            
            $table->foreign('organizations_id')->references('id')->on('organizations')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('offer_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('offer_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('available_assets_id')->references('id')->on('available_assets')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
