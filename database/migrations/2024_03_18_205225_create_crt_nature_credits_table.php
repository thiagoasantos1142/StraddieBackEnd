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
        Schema::create('crt_nature_credits', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->timestamps();
        });

        DB::table('crt_nature_credits')->insert([
            ['title' => '1 - Alimentar (Salários, vencimentos, proventos, pensões e suas complementações)'],            
            ['title' => '2 - Alimentar (Benefícios, Previdênciarios e Indenizações)'],
            ['title' => '3 - Comum (Não Alimentar)'], 
            ['title' => '4 - Comum (Desapropriação)']    ,                  
            ['title' => 'Outros']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nature_credits');
    }
};
