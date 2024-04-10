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
        Schema::create('crt_origin_debtors', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->timestamps();
        });

        DB::table('crt_origin_debtors')->insert([
            ['title' => 'Municipal'],
            ['title' => 'Municipal autarquias'],
            ['title' => 'Estadual'],
            ['title' => 'Estadual autarquias'],
            ['title' => 'Federal'],
            ['title' => 'Federal Autarquias'],
            ['title' => 'Outros']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origin_debtors');
    }
};
