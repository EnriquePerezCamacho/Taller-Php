<?php
// Inicializa una variable para almacenar el nombre
$nombre = "";

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']); // Protege contra XSS
}

// Imprime el formulario HTML
echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Nombre</title>
</head>
<body>
    <h1>Ingresa tu nombre</h1>
    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit">Enviar</button>
    </form>';

if ($nombre) {
    echo "<h2>Hola, $nombre!</h2>";
}

echo '</body>
</html>';
?>
