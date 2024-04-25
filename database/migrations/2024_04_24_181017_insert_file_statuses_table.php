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
             DB::table('file_statuses')->insert([
                ['title' => 'Aguardando envio'],
                ['title' => 'Enviado, aguardando aprovação'],            
                ['title' => 'Documento Aprovado'],            
                ['title' => 'Documento Rejeitado']
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
