<?php
// Incluir las variables
include 'index.php';

// 2. Mostrar la tarjeta usando echo y concatenación
echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "<title>Tarjeta de presentación</title>";
echo "</head>";

echo "<body style='font-family: Arial; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh;'>";

echo "<div style='background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.2); padding: 20px 40px;'>";
echo "<h2>Tarjeta de presentación</h2>";
echo "<ul>";
echo "<li><strong>Nombre:</strong> " . $nombre . "</li>";
echo "<li><strong>Edad:</strong> " . $edad . " años</li>";
echo "<li><strong>Ciudad:</strong> " . $ciudad . "</li>";
echo "<li><strong>Carrera:</strong> " . $carrera . "</li>";
echo "</ul>";
echo "</div>";

echo "</body>";
echo "</html>";
?>
