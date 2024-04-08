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
       DB::table('payment_categories')->insert([
            ['title' => 'Payment for Asset Acquisition'],
            ['title' => 'Transaction Associated Fees'],
            ['title' => 'Partner Commission Fee'],
            ['title' => 'Title Owner Payment'],
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
