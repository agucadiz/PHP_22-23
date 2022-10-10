<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <?php
    require 'auxiliar.php';

    $op1 = isset($_GET['op1']) ? trim($_GET['op1']) : null;
    $op2 = isset($_GET['op2']) ? trim($_GET['op2']) : null;
    $op = isset($_GET['op']) ? trim($_GET['op']) : null; 

    $error = [];
    $res = calcular_resultado($op1, $op2, $op, $error);

    if (empty($error)) {
        mostrar_resultado($op1, $op2, $op, $res);
    } else {
        mostrar_errores($error);
    }

    ?>

    <form action="" method="get">
        <div>
            <label for="op1">Operador 1: </label>
            <input type="text" name="op1" id="op1" />
            <br />
            <label for="op2">Operador 2: </label>
            <input type="text" name="op2" id="op2" />
            <br />
            <label for="op">Operador: </label>
            <input type="text" name="op" id="op" />
            <br />
            <button type="submit">Operación</button>
        </div>
    </form>

    <a href="calculadora.php">reiniciar</a>

</body>

</html>