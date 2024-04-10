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
        Schema::create('organization_types', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });

          // Insere os valores padrão
          DB::table('organization_types')->insert([
            ['id' => 1, 'title' => 'MEI'],
            ['id' => 2, 'title' => 'Sociedade Simples'],
            ['id' => 3, 'title' => 'Sociedade Limitada'],
            ['id' => 4, 'title' => 'Sociedade Limitada Unipessoal'],
            ['id' => 5, 'title' => 'Sociedade em Nome Coletivo'],            
            ['id' => 6, 'title' => 'Sociedade em Comandita Simples'],            
            ['id' => 7, 'title' => 'Sociedade Comandita por Ações'],            
            ['id' => 8, 'title' => 'Sociedade Anônima'],            
            ['id' => 9, 'title' => 'Sociedade Cooperativa'],
            ['id' => 10, 'title' => 'Sociedade de Advogados'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entidade_types');
    }
};
