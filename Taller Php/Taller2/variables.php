<?php
// Declara la constante GRAVITY con el valor de la gravedad en m/s^2
define("GRAVITY", 9.8);

/**
 * Calcula la fuerza de gravedad aplicada a un objeto en un planeta específico.
 *
 * @param string $planeta El nombre del planeta.
 * @param float $masa La masa del objeto en kilogramos.
 * @return float La fuerza de gravedad aplicada, o un mensaje de error si no es la Tierra.
 */
function calcularFuerzaGravedad($planeta, $masa) {
    // Verifica si el planeta es "Tierra"
    if (strtolower($planeta) === "tierra") {
        // Calcula la fuerza de gravedad
        $fuerza = $masa * GRAVITY; // Fuerza = masa * gravedad
        
        // Devuelve el resultado
        return $fuerza;
    } else {
        // Devuelve un mensaje de error si el planeta no es la Tierra
        return "Este cálculo solo se aplica a la Tierra.";
    }
}

// Ejemplo de uso
$masa = 70; // Masa en kilogramos
$planeta = "Tierra"; // Nombre del planeta

// Llama a la función para calcular la fuerza de gravedad
$resultado = calcularFuerzaGravedad($planeta, $masa);

// Imprime el resultado
if (is_numeric($resultado)) {
    echo "La fuerza de gravedad aplicada a un objeto de masa $masa kg en $planeta es: $resultado N.";
} else {
    echo $resultado; // Imprime el mensaje de error
}
?>

