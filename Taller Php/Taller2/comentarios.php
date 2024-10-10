<?php
/*
 * Este script contiene una función para calcular el área de un rectángulo.
 * La función toma dos parámetros: el ancho y el alto del rectángulo,
 * y devuelve el área calculada. Se incluyen comentarios detallados
 * para explicar cada parte del código y su funcionamiento.
 */

/**
 * Calcula el área de un rectángulo.
 *
 *  $ancho El ancho del rectángulo.
 *  $alto El alto del rectángulo.
 *  El área del rectángulo.
 */
function calcularAreaRectangulo($ancho, $alto) {
    // Se asegura de que los parámetros sean numéricos
    if (!is_numeric($ancho) || !is_numeric($alto)) {
        return "Los valores de ancho y alto deben ser numéricos.";
    }

    // Calcula el área multiplicando el ancho por el alto
    $area = $ancho * $alto;

    // Devuelve el área calculada
    return $area;
}

// Ejemplo de uso de la función
$ancho = 5;  // Ancho del rectángulo
$alto = 10;  // Alto del rectángulo

// Llama a la función y almacena el resultado
$resultado = calcularAreaRectangulo($ancho, $alto);

// Muestra el resultado
echo "El área del rectángulo de ancho $ancho y alto $alto es: $resultado";
?>