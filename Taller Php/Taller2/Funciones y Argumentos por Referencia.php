<?php
// Definir la función que acepta una variable por referencia y la incrementa en 10
function incrementarPorValor(&$variable) {
    $variable += 10;
}

// Declarar una variable con un valor inicial
$numero = 20;

// Mostrar el valor antes de llamar a la función
echo "Valor antes de incrementar: $numero \n";

// Llamar a la función pasando la variable por referencia
incrementarPorValor($numero);

// Mostrar el valor después de llamar a la función
echo "Valor después de incrementar: $numero \n";
?>
