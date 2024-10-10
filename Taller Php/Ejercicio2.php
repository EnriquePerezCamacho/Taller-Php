<?php

$entero = 42;
$flotante = 3.14;
$cadena = "Hola, mundo!";
$booleano = true;

echo "Entero: ";
var_dump($entero);
echo "<br>";

echo "Flotante: ";
var_dump($flotante);
echo "<br>";

echo "Cadena: ";
var_dump($cadena);
echo "<br>";

echo "Booleano: ";
var_dump($booleano);
echo "<br>";

echo "<pre>";
print_r($persona);
echo "</pre>";

define('NOMBRE_CURSO', "Programación PHP");
echo "El curso es: " . NOMBRE_CURSO;
echo "<br>";

function sumarArray($numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

$misNumeros = array(1, 2, 3, 4, 5);
$resultado = sumarArray($misNumeros);
echo "La suma es: " . $resultado;
echo "<br>";

$variableNula = null;
if (is_null($variableNula)) {
    echo "La variable es null";
} else {
    echo "La variable tiene un valor";
}
?>