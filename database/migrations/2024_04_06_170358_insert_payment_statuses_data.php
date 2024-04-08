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
        DB::table('payment_statuses')->insert([
            ['title' => 'PENDING', 'description' => 'Payment is pending'],
            ['title' => 'RECEIVED', 'description' => 'Payment has been RECEIVED'],
            ['title' => 'CONFIRMED', 'description' => 'Payment has CONFIRMED'],
            ['title' => 'OVERDUE', 'description' => 'Payment has OVERDUE'],
            ['title' => 'REFUNDED', 'description' => 'Payment has REFUNDED'],
            ['title' => 'RECEIVED_IN_CASH', 'description' => 'Payment has RECEIVED_IN_CASH'],
            ['title' => 'REFUND_REQUESTED', 'description' => 'Payment has REFUND_REQUESTED'],
            ['title' => 'REFUND_IN_PROGRESS', 'description' => 'Payment has REFUND_IN_PROGRESS'],
            ['title' => 'CHARGEBACK_REQUESTED', 'description' => 'Payment has CHARGEBACK_REQUESTED'],
            ['title' => 'CHARGEBACK_DISPUTE', 'description' => 'Payment has CHARGEBACK_DISPUTE'],
            ['title' => 'AWAITING_CHARGEBACK_REVERSAL', 'description' => 'Payment has AWAITING_CHARGEBACK_REVERSAL'],
            ['title' => 'DUNNING_REQUESTED', 'description' => 'Payment has DUNNING_RECEIVED'],
            ['title' => 'DUNNING_RECEIVED', 'description' => 'Payment has DUNNING_RECEIVED'],
            ['title' => 'AWAITING_RISK_ANALYSIS', 'description' => 'Payment has AWAITING_RISK_ANALYSIS']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          // Se necessário, você pode adicionar o código para reverter a inserção dos dados aqui
          DB::table('payment_statuses')->truncate();
    }
};
