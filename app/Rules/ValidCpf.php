<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidCpf implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        // Remove caracteres especiais do CPF
        $cpf = preg_replace('/[^0-9]/', '', $value);

        // Verifica se o CPF possui 11 dígitos
        if (strlen($cpf) !== 11) {
            $fail('O cpf deve conter 11 dígitos.');
        }

        // Verifica se todos os dígitos do CPF são iguais
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            $fail('O cpf é inválido.');
        }

        // Calcula os dígitos verificadores do CPF
        for ($i = 9; $i < 11; $i++) {
            $sum = 0;
            for ($j = 0; $j < $i; $j++) {
                $sum += $cpf[$j] * (($i + 1) - $j);
            }
            $digit = ((10 * $sum) % 11) % 10;
            if ($cpf[$i] != $digit) {
                $fail('O cpf é inválido.');
            }
        }
    }
}
