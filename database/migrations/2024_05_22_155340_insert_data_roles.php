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
                    
            ['id' => 1,'title' => 'Visualizar Usuários'],
            ['id' => 2,'title' => 'Cadastrar Usuário'],              
            ['id' => 3,'title' => 'Editar Usuário'],  
                     
            ['id' => 4,'title' => 'Visualizar Titulos'],   
            ['id' => 5,'title' => 'Cadastrar Titulo'],                
            ['id' => 6,'title' => 'Editar Titulo'], 
                        
            ['id' => 7,'title' => 'Visualizar Due Diligences'],
            ['id' => 8,'title' => 'Iniciar Due Diligence'],       
            ['id' => 9,'title' => 'Aprovar Due Diligence'],   

            ['id' => 10,'title'  => 'Visualizar Ativos'],                                   
            ['id' => 11,'title' => 'Cancelar Ativos'], 
                
            ['id' => 12,'title' => 'Visualizar ofertas'],
            ['id' => 13,'title' => 'Realizar oferta'],        
            ['id' => 14,'title' => 'Aceitar oferta'],

            ['id' => 15,'title' => 'Editar Permissões'],            
            
            ['id' => 16,'title' => 'Visualizar Usuários empresa'],
            ['id' => 17,'title' => 'Cadastrar Usuários empresa'],
            ['id' => 18,'title' => 'Editar Usuários empresa'],
            
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
