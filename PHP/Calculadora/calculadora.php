<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    require 'auxiliar.php';

    $operador1 = trim($_GET['operador1']);
    $operador2 = trim($_GET['operador2']);
    $op = trim($_GET['op']);

    $res = calcular_resultado($operador1, $operador2, $op);

    ?>

    <p>El resultado de <?= "$operador1 $op $operador2" ?> es <?= $res ?></p>
    <a href="calculadora.html">volver</a>

</body>

</html>