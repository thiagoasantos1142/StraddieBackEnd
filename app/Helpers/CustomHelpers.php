<?php

namespace App\Helpers;

use Carbon\Carbon;

class CustomHelpers
{
    /**
     * @param string $value recebe qualquer valor sendo string.
     */
    public static function removeFormat($value)
    {
        return preg_replace('/\D/', '', $value);
    }

    /**
     * @param date $date recebe uma data.
     */
    public static function formatDate($date)
    {
        $carbon = new Carbon($date);
        return $carbon->format('d/m/Y H:i:s');
    }

    /**
     * @param string $cnpj recebe um cnpj.
     */
    public static function formatCnpj($cnpj)
    {
        // Remove todos os caracteres que não são dígitos
        $cnpj = preg_replace('/\D/', '', $cnpj);

        // Verifica se o CNPJ tem exatamente 14 caracteres
        if (strlen($cnpj) === 14) {
            // Formata o CNPJ (XX.XXX.XXX/XXXX-XX)
            return substr($cnpj, 0, 2) . '.' . substr($cnpj, 2, 3) . '.' . substr($cnpj, 5, 3) . '/' . substr($cnpj, 8, 4) . '-' . substr($cnpj, 12, 2);
        } else {
            // Retorna o CNPJ sem formatação se não tiver 14 caracteres
            return $cnpj;
        }
    }


    /**
     * @param string $value recebe qualquer valor em real.
     */
    public static function removeFormatMoney($value)
    {
        $removePinters = str_replace('.', '', $value);
        return str_replace(',', '.', $removePinters);
    }
}
