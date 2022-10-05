<?php

function resultado($x, $y)
{
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