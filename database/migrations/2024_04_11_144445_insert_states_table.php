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
        DB::table('states')->insert([
			['id' => 1, 	'title' => 	'Acre',													'uf' => 'AC'], 
			['id' => 2, 	'title' => 	'Alagoas',												'uf' => 'AL'],
			['id' => 3, 	'title' => 	'Amazonas',												'uf' => 'AM'],
			['id' => 4, 	'title' => 	'Amapá', 												'uf' => 'AP'],
			['id' => 5,  	'title' => 	'Bahia',												'uf' => 'BA'],			
			['id' => 6,  	'title' => 	'Ceará',												'uf' => 'CE'],
			['id' => 7,  	'title' => 	'Distrito Federal',										'uf' => 'DF'],
			['id' => 8,  	'title' => 	'Espírito Santo',										'uf' => 'ES'],
			['id' => 9 , 	'title' => 	'Goiás',												'uf' => 'GO'],
			['id' => 10, 	'title' => 	'Maranhão',												'uf' => 'MA'],
			['id' => 11, 	'title' => 	'Minas Gerais',											'uf' => 'MG'],
			['id' => 12, 	'title' => 	'Mato Grosso do Sul',									'uf' => 'MS'],
			['id' => 13, 	'title' => 	'Mato Grosso',											'uf' => 'MT'],
			['id' => 14, 	'title' => 	'Pará',													'uf' => 'PA'],
			['id' => 15, 	'title' => 	'Paraíba',												'uf' => 'PB'],
			['id' => 16, 	'title' => 	'Pernambuco',											'uf' => 'PE'],
			['id' => 17, 	'title' => 	'Piauí',												'uf' => 'PI'],
			['id' => 18, 	'title' => 	'Paraná',												'uf' => 'PR'],
			['id' => 19, 	'title' => 	'Rio de Janeiro',										'uf' => 'RJ'],
			['id' => 20, 	'title' => 	'Rio Grande do Norte',									'uf' => 'RN'],
			['id' => 21, 	'title' => 	'Rondônia',												'uf' => 'RO'],
			['id' => 22, 	'title' => 	'Roraima',												'uf' => 'RR'],
			['id' => 23, 	'title' => 	'Rio Grande do Sul',									'uf' => 'RS'],
			['id' => 24, 	'title' => 	'Santa Catarina',										'uf' => 'SC'],
			['id' => 25, 	'title' => 	'Sergipe',												'uf' => 'SE'],
			['id' => 26, 	'title' => 	'São Paulo',											'uf' => 'SP'],
			['id' => 27, 	'title' => 	'Tocantins',											'uf' => 'TO']
			
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
