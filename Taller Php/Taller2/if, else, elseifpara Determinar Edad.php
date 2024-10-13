<?php
// Pedir al usuario que ingrese su edad
echo "Por favor, ingrese su edad: ";

// Leer la entrada del usuario
$edad = intval(trim(fgets(STDIN))); // Para entorno CLI, utilizar fgets

// Verificar la categoría de edad con if, elseif, else
if ($edad < 18) {
    echo "Eres menor de edad.";
} elseif ($edad >= 18 && $edad <= 35) {
    echo "Eres adulto joven.";
} elseif ($edad >= 36 && $edad <= 65) {
    echo "Eres adulto.";
} else {
    echo "Eres mayor de edad.";
}
?>
