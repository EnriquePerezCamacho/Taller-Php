<?php
// Definimos algunas variables para nuestros ejemplos
$a = 10;
$b = 5;
$c = "10";
$d = "Hola";

// Igual (==)
if ($a == $b) {
    echo "a es igual a b (en valor)<br>";
} else {
    echo "a es diferente de b (en valor)<br>";
}

// Idéntico (===)
if ($a === $c) {
    echo "a es idéntico a c (mismo valor y tipo)<br>";
} else {
    echo "a no es idéntico a c (diferente tipo)<br>";
}

// Diferente (!=)
if ($a != $b) {
    echo "a es diferente de b<br>";
}

// No idéntico (!==)
if ($a !== $c) {
    echo "a no es idéntico a c<br>";
}

// Menor que (<)
if ($b < $a) {
    echo "b es menor que a<br>";
}

// Mayor que (>)
if ($a > $b) {
    echo "a es mayor que b<br>";
}

// Menor o igual que (<=)
if ($b <= $a) {
    echo "b es menor o igual que a<br>";
}

// Mayor o igual que (>=)
if ($a >= $b) {
    echo "a es mayor o igual que b<br>";
}

// Comparación de cadenas
if ($d > "Hola!") {
    echo "d es mayor que 'Hola!' (alfabéticamente)<br>";
} else {
    echo "d no es mayor que 'Hola!'<br>";
}

// Conversión de tipos implícita
$x = 5;
$y = "3";
$z = $x + $y; // PHP convierte "3" a un entero y realiza la suma
echo "La suma de x e y es: " . $z . "<br>";
// Operadores de comparación
$a = 10;
$b = 5;
$c = "10";

// Igual (==)
if ($a == $b) {
    echo "a es igual a b (en valor)<br>";
}

// Idéntico (===)
if ($a === $c) {
    echo "a es idéntico a c (mismo valor y tipo)<br>";
}

// ... (resto de los operadores de comparación)

// Operadores lógicos
$x = true;
$y = false;

// AND (&&)
if ($x && $y) {
    echo "Ambas expresiones son verdaderas<br>";
}

// OR (||)
if ($x || $y) {
    echo "Al menos una expresión es verdadera<br>";
}

// NOT (!)
if (!$y) {
    echo "La expresión y es falsa<br>";
}

// Combinación de operadores
if (($a > $b) && ($x || $y)) {
    echo "a es mayor que b y al menos una de las expresiones x o y es verdadera<br>";
}