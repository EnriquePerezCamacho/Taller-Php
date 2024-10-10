<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Interés Simple</title>
</head>
<body>
    <h1>Cálculo de Interés Simple</h1>
    <form method="POST" action="">
        <label for="cantidad">Cantidad Principal ($):</label>
        <input type="number" id="cantidad" name="cantidad" required step="0.01">
        <button type="submit">Calcular Interés</button>
    </form>
</body>
</html>

<?php
// Define la constante TASA_INTERES con el valor de 5%
define("TASA_INTERES", 0.05);

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene la cantidad principal del formulario y la convierte a float
    $cantidadPrincipal = floatval($_POST['cantidad']);

    // Calcula el interés simple
    $interesSimple = $cantidadPrincipal * TASA_INTERES;

    // Imprime el resultado
    echo "<h2>Resultado del Cálculo de Interés Simple</h2>";
    echo "Cantidad Principal: $" . number_format($cantidadPrincipal, 2) . "<br>";
    echo "Tasa de Interés: " . (TASA_INTERES * 100) . "%<br>";
    echo "Interés Simple después de un año: $" . number_format($interesSimple, 2) . "<br>";
}
?>
