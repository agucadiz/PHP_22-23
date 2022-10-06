<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="container">
        <?php
        require 'auxiliar.php';

        /* $cad1 = trim($_GET['cad1']);
        $cad2 = trim($_GET['cad2']); */

        $cad1 = isset($_GET['cad1']) ? trim($_GET['cad1']) : null;
        $cad2 = isset($_GET['cad2']) ? trim($_GET['cad2']) : null;

        $res = resultado($cad1, $cad2);
        ?>

        <p id="res">El hamming de las cadenas <?= "$cad1 y $cad2" ?> es: <?= $res ?></p>
        <a href="hamming.html">volver</a>
    </div>

</body>

</html>