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
       DB::table('file_types')->insert([
            ['title' => 'RG (Identidade)', 'type'=> 'KYC'],
            ['title' => 'CPF (Cadastro de Pessoa Física)', 'type'=> 'KYC'],            
            ['title' => 'CNH (Carteira Nacional de Habilitação)', 'type'=> 'KYC'],
            ['title' => 'Passaporte', 'type'=> 'KYC'],
            ['title' => 'Comprovante de Residência', 'type'=> 'KYC'],
            ['title' => 'Certidão de Casamento', 'type'=> 'KYC'],
            ['title' => 'Declaração de Imposto de Renda', 'type'=> 'KYC'],
            ['title' => 'Extrato Bancário', 'type'=> 'KYC'],

            ['title' => 'Contrato Social (para empresas)', 'type'=> 'KYC'],
            ['title' => 'Cartão CNPJ (Cadastro Nacional da Pessoa Jurídica)', 'type'=> 'KYC'],
            ['title' => 'Certidão Negativa de Débitos (CND) Federal', 'type'=> 'CND'],
            ['title' => 'Certidão Negativa de Débitos (CND) Estadual', 'type'=> 'CND'],
            ['title' => 'Certidão Negativa de Débitos (CND) Municipal', 'type'=> 'CND'],
            ['title' => 'Certidão Negativa de Protesto', 'type'=> 'CND'],
            ['title' => 'Certidão Negativa de Tributos Imobiliários', 'type'=> 'CND'],
            ['title' => 'Certidão Negativa de Falência e Recuperação Judicial', 'type'=> 'CND'],
            ['title' => 'Certidão Negativa de Débitos Trabalhistas (CNDT)', 'type'=> 'CND'],
            
            ['title' => 'Contrato de Prestação de Serviços', 'type'=> 'OUTROS'],
            ['title' => 'Contrato de Locação', 'type'=> 'OUTROS'],
            ['title' => 'Contrato de Compra e Venda', 'type'=> 'OUTROS'],
            ['title' => 'Sentença Judicial', 'type'=> 'OUTROS'],
            ['title' => 'Documento de Regularidade Fiscal', 'type'=> 'OUTROS'],
            ['title' => 'Termo de Consentimento e Autorização', 'type'=> 'OUTROS'],
            ['title' => 'Documento de Autorização', 'type'=> 'OUTROS'],
            ['title' => 'Documento de Autorização de Pagamento', 'type'=> 'OUTROS'],
            ['title' => 'Documento de Autorização de Venda', 'type'=> 'OUTROS'],
            ['title' => 'Documento de Autorização de Compra', 'type'=> 'OUTROS'],
            ['title' => 'Procuração', 'type'=> 'OUTROS'],
            

            
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
