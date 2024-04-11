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
        Schema::create('credit_rights_titles', function (Blueprint $table) {
            $table->id();            
            $table->string('process_number', 255)->nullable();
            $table->string('title', 255);
            
            $table->string('class', 45)->nullable();

            $table->foreignId('court_id')->constrained('courts')->nullable();
            $table->foreignId('specie_id')->constrained('crt_species')->nullable();
            $table->foreignId('vara_id')->constrained('court_varas')->nullable();
            $table->foreignId('nature_credit_id')->constrained('crt_nature_credits')->nullable();            
            $table->foreignId('nature_obligation_id')->constrained('crt_nature_credits')->nullable();
            $table->foreignId('origin_debtor_id')->constrained('crt_origin_debtors')->nullable();
           
            $table->date('distribution_date')->nullable();            
            $table->date('final_judgment_date')->nullable();            
            $table->date('final_judgment_embargoes_date')->nullable();            
            $table->date('registration_date')->nullable();
            $table->date('signature_date')->nullable();
            
            $table->tinyInteger('justice_secret')->nullable();
            $table->tinyInteger('justice_free')->nullable();
            
            
            $table->string('reference', 45)->nullable();
            $table->string('provision', 45)->nullable();

            $table->decimal('principal_amount', 16, 2)->nullable();
            $table->decimal('interest_selic_amount', 16, 2)->nullable();
            $table->decimal('interest_compensatory_amount', 16, 2)->nullable();            
            $table->decimal('total_amount', 16, 2)->nullable();
                     
            
            $table->decimal('contractual_fee_principal_amount', 16, 2)->nullable();            
            $table->decimal('contractual_fee_interest_selic_amount', 16, 2)->nullable();            
            $table->decimal('contractual_fee_total_amount', 16, 2)->nullable();

            $table->decimal('FGTS_Value', 16, 2)->nullable();
            

            $table->string('legal_charge', 45)->nullable();
            $table->string('legal_percentage', 45)->nullable();
            $table->string('legal_preference', 45)->nullable();
            $table->string('server_condition', 45)->nullable();
            $table->string('allocation_department', 45)->nullable();
            $table->string('justification', 955)->nullable();
            $table->string('IR_percentage_provision', 45)->nullable();
            $table->string('debtor_cpf_cnpj', 45)->nullable();
            $table->string('legal_incidents', 45)->nullable();
            $table->string('previous_exercise_parcel_quantity', 45)->nullable();
            $table->string('previous_exercise_values_total', 45)->nullable();
            $table->string('ir_deduction_base_calculation', 45)->nullable();    
            $table->string('PSS', 45)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_rights_titles');
    }
};
