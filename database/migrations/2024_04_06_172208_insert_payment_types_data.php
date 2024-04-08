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
        DB::table('payment_types')->insert([
            ['title' => 'Cash', 'description' => 'Payment made with cash'],
            ['title' => 'Credit Card', 'description' => 'Payment made with a credit card'],
            ['title' => 'Debit Card', 'description' => 'Payment made with a debit card'],
            ['title' => 'UNDEFINED', 'description' => 'Payment made with a debit UNDEFINED'],
            ['title' => 'TRANSFER', 'description' => 'Payment made with a debit TRANSFER'],
            ['title' => 'DEPOSIT', 'description' => 'Payment made with a DEPOSIT '],
            ['title' => 'PIX', 'description' => 'Payment made with a debit pix'],
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
