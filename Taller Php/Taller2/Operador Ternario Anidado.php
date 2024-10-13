<?php
// Definir la variable $calificacion con un valor numérico
$calificacion = 85;

// Usar operador ternario anidado para determinar el rango de la calificación
$resultado = ($calificacion >= 90) ? "Sobresaliente" : 
            (($calificacion >= 70) ? "Buena" : "Necesita mejorar");

// Imprimir el resultado
echo "La calificación es: " . $resultado;
?>
