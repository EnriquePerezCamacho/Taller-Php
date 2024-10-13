<?php
// Crear un array de números del 1 al 5
$numeros = [1, 2, 3, 4, 5];

// Usar array_map con una función anónima para elevar cada número al cuadrado
$cuadrados = array_map(function($numero) {
    return $numero ** 2; // Elevar al cuadrado
}, $numeros);

// Imprimir el array original
echo "Array original: ";
print_r($numeros);

// Imprimir el nuevo array con los cuadrados
echo "Array con cuadrados: ";
print_r($cuadrados);
?>
