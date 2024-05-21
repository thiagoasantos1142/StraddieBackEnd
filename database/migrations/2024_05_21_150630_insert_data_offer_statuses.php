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

        DB::table('offer_statuses')->insert([
            ['title' => 'Enviada', 'id'=> '1'],
            ['title' => 'Visualizada', 'id'=> '2'],            
            ['title' => 'Aprovada', 'id'=> '3'],
            ['title' => 'Negada', 'id'=> '4']
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
