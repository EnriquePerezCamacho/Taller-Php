<?php
// Definir la función para convertir temperatura
function convertirTemperatura($temperatura, $escala = "C") {
    if ($escala === "C") {
        // Convertir de Celsius a Fahrenheit
        return ($temperatura * 9/5) + 32;
    } elseif ($escala === "F") {
        // Convertir de Fahrenheit a Celsius
        return ($temperatura - 32) * 5/9;
    } else {
        // Si la escala no es válida, retornar un mensaje de error
        return "Escala no válida. Use 'C' para Celsius o 'F' para Fahrenheit.";
    }
}

// Ejemplo de uso
$temperaturaC = 25; // Temperatura en Celsius
$temperaturaF = 77; // Temperatura en Fahrenheit

// Convertir de Celsius a Fahrenheit
$resultadoCtoF = convertirTemperatura($temperaturaC);
echo "$temperaturaC °C es igual a $resultadoCtoF °F\n";

// Convertir de Fahrenheit a Celsius
$resultadoFtoC = convertirTemperatura($temperaturaF, "F");
echo "$temperaturaF °F es igual a $resultadoFtoC °C\n";
?>
