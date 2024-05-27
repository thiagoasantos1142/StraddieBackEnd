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
                    
            ['id' => 16,'title' => 'Visualizar Empresas'],
            ['id' => 17,'title' => 'Cadastrar Empresas'],              
            ['id' => 18,'title' => 'Editar Empresas'],  
                     
          
            
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
