<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del cliente</title>
</head>

<body>
    <?php
    $dni = trim($_POST['dni']);
    $nombre = trim($_POST['nombre']);
    ?>
    <ul>
        <li>Apellido: <?= $dni ?></li>
        <li>Nombre: <?= $nombre ?></li>
    </ul>
    <a href="formulario.html">volver</a>

</body>

</html>