<?php

function resultado($x, $y)
{   
    if (empty($x)) {
        return "Error: La cadena 1 no deben de estar vacía.";
    }

    if (empty($y)) {
        return "Error: Las cadena 2 no deben de estar vacía.";
    }

    if (mb_strlen($x) != mb_strlen($y)){
        return 'Las cadenas no tienen la misma longitud.';
    }

    $diff = 0;

    for ($i=0; $i < mb_strlen($x); $i++) { 
        if (mb_substr($x, $i, 1) != mb_substr($y, $i, 1)) {
            $diff++;
        }
    }

    return $diff;
}