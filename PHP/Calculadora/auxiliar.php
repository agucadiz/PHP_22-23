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
 * @param float $oper1 El primer operando.
 * @param float $oper2 El segundo operando.
 * @param string $oper El operador.
 *                     (valores válidos: '+', '-', '*', '/', '%').
 * @param array $error El array de errores.
 * @return ?float El resultado del cálculo.
 */

function calcular_resultado(?float $oper1, ?float $oper2, ?string $oper, array &$error): ?float
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
        case null:
            $error[] = null;
            return null;
            break;
        default:
            $error[] = 'Error: operación incorrecta.';
            return null;
    }
    return $res;
}

    function mostrar_errores(array $error): void
    {
        foreach ($error as $err) { ?>
            <p> <?= $err ?> </p> <?php
        }
    }

    function mostrar_resultado($op1, $op2, $op, $res)
    { ?>
        <p>El resultado de <?= "$op1 $op $op2" ?> es <?= $res ?></p> <?php
    }

