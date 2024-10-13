<?php
// Crear un array con los números del 1 al 10
$numeros = range(1, 10);

// Crear un array vacío para almacenar los resultados
$resultados = [];

// Recorrer el array original y multiplicar cada número por 2
foreach ($numeros as $numero) {
    $resultados[] = $numero * 2; // Almacenar el resultado en el nuevo array
}

// Mostrar el array original
echo "Array original:\n";
print_r($numeros);

// Mostrar el array con los resultados
echo "Array con los números multiplicados por 2:\n";
print_r($resultados);
?>
