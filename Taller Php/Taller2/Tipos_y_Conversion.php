<?php
// Declara una variable de tipo cadena que contiene un número
$cadenaNumero = "25"; // Tipo de dato: string

// Imprime el valor y tipo de dato original
echo "Antes de la conversión:\n";
var_dump($cadenaNumero); // Muestra el tipo de dato (string)

// Convierte la cadena a entero
$numeroEntero = (int)$cadenaNumero; // Tipo de dato: integer

// Realiza una suma con otro número
$suma = $numeroEntero + 10; // Suma con el número 10

// Imprime el resultado y tipo de dato después de la conversión
echo "Después de la conversión:\n";
var_dump($numeroEntero); // Muestra el tipo de dato (integer)
echo "El resultado de la suma es: $suma\n"; // Imprime el resultado de la suma
?>
