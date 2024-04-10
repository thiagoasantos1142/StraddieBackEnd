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
        Schema::create('crt_nature_obligations', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->timestamps();
        });

        DB::table('crt_nature_obligations')->insert([
            ['title' => 'Administrativo'],            
            ['title' => 'Constitucional'],                   
            ['title' => 'Tributário'],
            ['title' => 'Civil'],                               
            ['title' => 'Trabalhista'],
            ['title' => 'Previdenciário'],                             
            ['title' => 'Desapropriação'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crt_nature_obligations');
    }
};
