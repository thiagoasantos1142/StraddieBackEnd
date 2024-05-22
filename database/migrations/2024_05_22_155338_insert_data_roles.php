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
          // Inserir dados padrão
          DB::table('roles')->insert([
            ['id' => 1,'title' => 'Cadastrar Usuário'],            
            ['id' => 2,'title' => 'Visualizar Usuários'],
            ['id' => 3,'title' => 'Cadastrar Titulo'],            
            ['id' => 4,'title' => 'Visualizar Titulos'],
            ['id' => 5,'title' => 'Aprovar Titulo'],            
            ['id' => 6,'title' => 'Iniciar Due Diligence'],                
            ['id' => 7,'title' => 'Visualizar Due Diligences'],    
            ['id' => 8,'title' => 'Aprovar Due Diligence'],                      
            ['id' => 9,'title' => 'Visualizar Ativos'],                                   
            ['id' => 10,'title' => 'Cancelar Ativos'],  
            ['id' => 11,'title' => 'Fazer oferta'],            
            ['id' => 12,'title' => 'Visualizar ofertas'],
            ['id' => 13,'title' => 'Aceitar oferta'],
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
