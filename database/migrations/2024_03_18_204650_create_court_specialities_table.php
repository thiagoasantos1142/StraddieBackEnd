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
        Schema::create('court_specialities', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->timestamps();

        });
        
        DB::table('court_specialities')->insert([
                ['title' => 'Civil'], 
                ['title' => 'Criminal'], 
                ['title' => 'Execução penal'], 
                ['title' => 'Naturalização'], 
                ['title' => 'Sistema Financeiro'],                 
                ['title' => 'Lavagem de dinheiro'], 
                ['title' => 'Execução fiscal'],
                ['title' => 'Juizado especial federal'],                 
                ['title' => 'Execuções Fiscais'], 
                ['title' => 'Tributária'], 
                ['title' => 'Agrária'], 
                ['title' => 'Imobiliária'], 
                ['title' => 'Ambiental Cível'],                 
                ['title' => 'Ambiental Criminal'], 
                ['title' => 'FGTS'], 
                ['title' => 'Saúde'], 
                ['title' => 'Vícios Construtivos'], 
                ['title' => 'Contrabando'], 
                ['title' => 'Dir. Autoral'],
                ['title' => 'Júri'],          
                ['title' => 'Benefício por incapacidade'],                 
                ['title' => 'Previdenciária'],     
                ['title' => 'Benefício Assistencial'],     
                ['title' => 'Aduaneira'],     
                ['title' => 'Habitacional'],     
                ['title' => 'Saúde'],
                ['title' => 'Trabalho'],                   
                ['title' => 'Empresárial'], 
                ['title' => 'Família'], 
                ['title' => 'Órfãos e Sucessões'], 
                ['title' => 'Fazenda Pública'], 
                ['title' => 'Infancia e Juventude']
              
           ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('court_speciality');
    }
};
