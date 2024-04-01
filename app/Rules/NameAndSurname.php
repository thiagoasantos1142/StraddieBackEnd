<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NameAndSurname implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //verificar se tem nome e sobrenome
        $palavras = explode(' ', $value);

        // Remove espaços em branco extras e palavras vazias
        $palavras = array_filter(array_map('trim', $palavras));

        // Conta o número de palavras no array
        $numeroDePalavras = count($palavras);

        if (!($numeroDePalavras > 1)) {
            $fail('O campo deve conter nome e sobrenome.');
        }
    }
}
