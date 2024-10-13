<?php
// Declarar la variable con un valor inicial de 100
$numero = 100;

// Usar operadores de asignación para modificar el valor
$numero += 20;  // Sumar 20 al valor de la variable (100 + 20 = 120)
$numero -= 30;  // Restar 30 al valor de la variable (120 - 30 = 90)
$numero *= 2;   // Multiplicar el valor por 2 (90 * 2 = 180)
$numero /= 3;   // Dividir el valor por 3 (180 / 3 = 60)

// Usar una condicional if para determinar si el valor final es mayor o menor que 100
if ($numero > 100) {
    echo "El valor final es mayor que 100. Valor: " . $numero;
} elseif ($numero < 100) {
    echo "El valor final es menor que 100. Valor: " . $numero;
} else {
    echo "El valor final es exactamente 100.";
}
?>
