<?php
// Definir los dos arrays
$array1 = ["rojo", "verde", "azul"];
$array2 = ["verde", "amarillo", "azul"];

// Usar array_diff() para encontrar los colores que están en $array1 pero no en $array2
$diferencia = array_diff($array1, $array2);

// Imprimir los resultados
echo "Los colores que están en array1 pero no en array2 son: \n";
foreach ($diferencia as $color) {
    echo "$color \n";
}
?>
