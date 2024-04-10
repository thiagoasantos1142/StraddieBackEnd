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
        Schema::create('crt_species', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->timestamps();
        });

        DB::table('crt_species')->insert([
            ['title' => 'Originário'],            
            ['title' => 'De cessão'],                  
            ['title' => 'Outros'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('species');
    }
};
