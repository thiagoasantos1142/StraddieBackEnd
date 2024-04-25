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
        Schema::table('credit_rights_titles', function (Blueprint $table) {

            // Remover a restrição de chave estrangeira existente
            $table->dropConstrainedForeignId('nature_obligation_id');

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('credit_rights_titles', function (Blueprint $table) {
            $table->dropForeign(['nature_obligation_id']); // Remova a restrição de chave estrangeira criada na migração "up"
            $table->foreignId('nature_obligation_id')->constrained('crt_nature_credits')->nullable()->change(); // Restaure a restrição de chave estrangeira anterior
        });
    }
};
