<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjeta de Presentación</title>
    

    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="tarjeta">
        <h1><?= $nombre ?></h1>
        
        <ul>
            <li><strong>Edad:</strong> <?= $edad ?> años</li>
            <li><strong>Ciudad:</strong> <?= $ciudad ?></li>
            <li><strong>Carrera:</strong> <?= $carrera ?></li>
        </ul>
    </div>

</body>
</html>