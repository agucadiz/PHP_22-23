<?php

/**
 * @author Agustín Pedrote Bejarano
 * @copyright Copyright (c) 2022 Agustín Pedrote Bejarano
 * @license https://www.gnu.org/licenses/gpl.txt
 */


/**
 * Calcula el resultado de hacer la operación de $oper sobre 
 * los argumentos $oper1 y $oper2.
 * 
 * @param mixed $oper1 El primer operando.
 * @param mixed $oper2 El segundo operando.
 * @param string $oper El operador.
 *                     (valores válidos: '+', '-', '*', '/').
 * @return mixed El resultado del cálculo.
 */

function calcular_resultado($oper1, $oper2, $oper)
{
    switch ($oper) {
        case '+':
            $res = $oper1 + $oper2;
            break;
        case '-':
            $res = $oper1 - $oper2;
            break;
        case '*':
            $res = $oper1 * $oper2;
            break;
        case '/':
            $res = $oper1 / $oper2;
            break;
        case '%':
            $res = $oper1 % $oper2;
            break;
        default:
            $res = 'Error';
            break;
    }
    return $res;
}
