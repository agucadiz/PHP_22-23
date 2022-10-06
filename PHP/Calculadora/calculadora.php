<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    require 'auxiliar.php';

    /*     $op1 = isset($_GET['op1']) ? trim($_GET['op1']) : null;
    $op2 = isset($_GET['op2']) ? trim($_GET['op2']) : null;
    $op = isset($_GET['op']) ? trim($_GET['op']) : null; */

    $op1 = trim($_GET['op1']);
    $op2 = trim($_GET['op2']);
    $op = trim($_GET['op']);
    $error = [];
    $res = calcular_resultado($op1, $op2, $op, $error);

    if (empty($error)) {
        mostrar_resultado($op1, $op2, $op, $res);
    } else {
        mostrar_errores($error);
    }

    ?>

    <a href="calculadora.html">volver</a>

</body>

</html>