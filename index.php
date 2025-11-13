<?php

$nombre = "Ana García";
$edad = 28;
$ciudad = "Madrid";
$carrera = "Ingeniería Informática";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarjeta de Presentación</title>
    <style>
        .tarjeta { border: 1px solid #ccc; padding: 20px; margin: 20px; max-width: 300px; }
        .tarjeta ul { list-style-type: none; padding: 0; }
        .tarjeta li { margin: 8px 0; padding: 5px; background: #f0f0f0; }
    </style>
</head>
<body>
    <div class="tarjeta">
        <h2>Tarjeta de Presentación</h2>
        <ul>
            <li><strong>Nombre:</strong> <?php echo $nombre; ?></li>
            <li><strong>Edad:</strong> <?php echo $edad; ?> años</li>
            <li><strong>Ciudad:</strong> <?php echo $ciudad; ?></li>
            <li><strong>Carrera:</strong> <?php echo $carrera; ?></li>
        </ul>
    </div>
</body>
</html>