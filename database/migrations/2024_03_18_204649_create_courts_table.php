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
        Schema::create('courts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('UF', 60)->nullable();
            $table->timestamps();
        });

        DB::table('courts')->insert([
    		['id' => 1, 'title' => 'Tribunal Regional Federal da 1ª Região (TRF1)', 'uf' => 'AC, AM, AP, BA, DF, GO, MA, MT, PA, PI, RO, RR e TO'], 
            ['id' => 2, 'title' => 'Tribunal Regional Federal da 2ª Região (TRF2)', 'uf' => 'ES e RJ'],  
            ['id' => 3, 'title' => 'Tribunal Regional Federal da 2ª Região (TRF3)', 'uf' => 'MS e SP'],  
            ['id' => 4, 'title' => 'Tribunal Regional Federal da 3ª Região (TRF4)', 'uf' => 'PR, RS e SC'],
            ['id' => 5, 'title' => 'Tribunal Regional Federal da 4ª Região (TRF5)', 'uf' => 'AL, CE, PB, PE, RN e SE'],              
            ['id' => 6, 'title' => 'Tribunal Regional Federal da 5ª Região (TRF6)', 'uf' => 'MG'],
			['id' => 7, 'title' => 'Tribunal de Justiça do Acre (TJAC)', 'uf' => 'AC'],
			['id' => 8, 'title' => 'Tribunal de Justiça de Alagoas (TJAL)', 'uf' => 'AL'],
			['id' => 9, 'title' => 'Tribunal de Justiça do Amapá (TJAP)', 'uf' => 'AP'],
			['id' => 10 ,'title' => 'Tribunal de Justiça do Amazonas (TJAM)', 'uf' => 'AM'],
			['id' => 11 ,'title' => 'Tribunal de Justiça da Bahia (TJBA)', 'uf' => 'BA'],
			['id' => 12 ,'title' => 'Tribunal de Justiça do Ceará (TJCE)', 'uf' => 'CE'],
			['id' => 13 ,'title' => 'Tribunal de Justiça do Distrito Federal e Territórios (TJDFT)', 'uf' => 'DF'],
			['id' => 14 ,'title' => 'Tribunal de Justiça do Espírito Santo (TJES)', 'uf' => 'ES'],
			['id' => 15 ,'title' => 'Tribunal de Justiça de Goiás (TJGO)', 'uf' => 'GO'],
			['id' => 16 ,'title' => 'Tribunal de Justiça do Maranhão (TJMA)', 'uf' => 'MA'],
			['id' => 17 ,'title' => 'Tribunal de Justiça de Mato Grosso (TJMT)', 'uf' => 'MT'],
			['id' => 18 ,'title' => 'Tribunal de Justiça de Mato Grosso do Sul (TJMS)', 'uf' => 'MS'],
			['id' => 19 ,'title' => 'Tribunal de Justiça de Minas Gerais (TJMG)', 'uf' => 'MG'],
			['id' => 20 ,'title' => 'Tribunal de Justiça do Pará (TJPA)', 'uf' => 'PA'],
			['id' => 21 ,'title' => 'Tribunal de Justiça da Paraíba (TJPB)', 'uf' => 'PB'],
			['id' => 22 ,'title' => 'Tribunal de Justiça do Paraná (TJPR)', 'uf' => 'PR'],
			['id' => 23 ,'title' => 'Tribunal de Justiça de Pernambuco (TJPE)', 'uf' => 'PE'],
			['id' => 24 ,'title' => 'Tribunal de Justiça do Piauí (TJPI)', 'uf' => 'PI'],
			['id' => 25 ,'title' => 'Tribunal de Justiça do Rio de Janeiro (TJRJ)', 'uf' => 'RJ'],
			['id' => 26 ,'title' => 'Tribunal de Justiça do Rio Grande do Norte (TJRN)', 'uf' => 'RN'],
			['id' => 27 ,'title' => 'Tribunal de Justiça do Rio Grande do Sul (TJRS)', 'uf' => 'RS'],
			['id' => 28 ,'title' => 'Tribunal de Justiça de Rondônia (TJRO)', 'uf' => 'RO'],
			['id' => 29 ,'title' => 'Tribunal de Justiça de Roraima (TJRR)', 'uf' => 'RR'],
			['id' => 30 ,'title' => 'Tribunal de Justiça de Santa Catarina (TJSC)', 'uf' => 'SC'],
			['id' => 31 ,'title' => 'Tribunal de Justiça de São Paulo (TJSP)', 'uf' => 'SP'],
			['id' => 32 ,'title' => 'Tribunal de Justiça de Sergipe (TJSE)', 'uf' => 'SE'],
			['id' => 33 ,'title' => 'Tribunal de Justiça do Tocantins (TJTO)', 'uf' => 'TO']
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courts');
    }
};
