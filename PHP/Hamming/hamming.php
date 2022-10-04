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

    $cad1 = trim($_GET['cad1']);
    $cad2 = trim($_GET['cad2']);

    $res = resultado($cad1, $cad2);

    ?>

    <p>El hamming de las cadenas <?= "$cad1 y $cad2" ?> es: <?= $res ?></p>
    <a href="hamming.html">volver</a>

</body>

</html>