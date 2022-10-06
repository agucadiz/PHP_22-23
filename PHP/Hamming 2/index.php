<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            require 'auxiliar.php';
            $cadena1 = str_split($_GET['cad1']);
            $cadena2 = str_split($_GET['cad2']);
            $errores = [];
            $resultado = comprobar_cadena($cadena1, $cadena2, $errores);
            
            
            if (empty($errores)) { 
                mostrar_resultado($cadena1, $cadena2, $resultado);
            }else { 
                mostrar_error($errores);
            }
        ?>  
    </body>
</html>

