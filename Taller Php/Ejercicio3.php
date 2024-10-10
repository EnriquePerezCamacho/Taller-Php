<?php
// Definimos dos variables numéricas
$numero1 = 20;
$numero2 = 15;

// Operaciones aritméticas básicas
$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;

$modulo = $numero1 % $numero2; 


echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division . "<br>";
echo "Módulo: " . $modulo . "<br>";

// Operadores de comparación
if ($numero1 > $numero2) {
    echo "El número 1 es mayor que el número 2<br>";
} else if ($numero1 < $numero2) {
    echo "El número 1 es menor que el número 2<br>";
} else {
    echo "Los números son iguales<br>";
}

// Operador ternario (par o impar)
echo ($numero1 % 2 == 0) ? "El número 1 es par" : "El número 1 es impar" . "<br>";

// Operadores lógicos
if ($numero1 > 10 && $numero2 > 10) {
    echo "Ambos números son mayores que 10<br>";
} else {
    echo "Al menos uno de los números no es mayor que 10<br>";
}

// Operadores de incremento y decremento
$numero1++; // Incrementa en 1
$numero2--; // Decrementa en 1
echo "Número 1 después del incremento: " . $numero1 . "<br>";
echo "Número 2 después del decremento: " . $numero2 . "<br>";