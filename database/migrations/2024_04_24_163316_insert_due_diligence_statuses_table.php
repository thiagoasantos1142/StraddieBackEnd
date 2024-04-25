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
        DB::table('due_diligence_statuses')->insert([
            ['title' => 'Aberta'],
            ['title' => 'Em andamento'],            
            ['title' => 'Aprovada'],            
            ['title' => 'Reprovada']
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
