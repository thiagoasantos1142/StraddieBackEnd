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
        Schema::create('crt_types', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->timestamps();
        });

        DB::table('crt_types')->insert([
            ['title' => 'Precatório'],
            ['title' => 'Ações Judiciais'],
            ['title' => 'Títulos inadimplentes'],
            ['title' => 'Direitos Creditórios (Fase anterior ao precatório)'],
            ['title' => 'Outros']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crt_types');
    }
};
