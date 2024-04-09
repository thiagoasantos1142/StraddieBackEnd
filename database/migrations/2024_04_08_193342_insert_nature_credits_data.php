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
          // Inserir categorias de pagamento
       DB::table('nature_credits')->insert([
            ['title' => 'Alimentar'],
            ['title' => 'Tributaria'],
            ['title' => 'Comum'],
            ['title' => 'Trabalhista'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
