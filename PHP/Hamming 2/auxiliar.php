<?php
function comprobar_cadena(array $cad1, array $cad2, array &$error): ?float{

    if (count($cad1) == count($cad2) ) {
        $contador = 0;
        $res = 0;
        while ($contador < count($cad1)) {
            if ($cad1[$contador] != $cad2[$contador]) {
                $res ++; 
            }
            $contador ++;
        }
    }else {
        $error[] = 'La lonjitud de ambas cadenas deben de ser iguales';
        return null;
    }
    return $res;           
    
} 

function mostrar_error(array $errores): void{
    foreach ($errores as $error) {?>
        <p>Error: <?= $error ?></p>
    <?php 
    }
}

function mostrar_resultado($cad1, $cad2, $re): void{
        if ($cad1 === $cad2) {?>
            <p>Las cadenas pasadas son exactamente iguales.</p>
       <?php }else { ?>
            <p>Ambas cadenas son diferentes en <?= $re ?> parametros</p>
<?php } }