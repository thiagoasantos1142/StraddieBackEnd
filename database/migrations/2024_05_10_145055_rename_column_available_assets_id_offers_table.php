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
        Schema::table('offers', function (Blueprint $table) {

            $table->dropConstrainedForeignId('offer_statuses_id');
            
            $table->dropConstrainedForeignId('organizations_id');            
            $table->unsignedBigInteger('organization_id')->nullable();

            $table->dropConstrainedForeignId('available_assets_id');
            $table->unsignedBigInteger('available_asset_id')->nullable();

            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('offer_status_id')->references('id')->on('offer_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('available_asset_id')->references('id')->on('available_assets')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offers', function (Blueprint $table) {
            //
        });
    }
};
