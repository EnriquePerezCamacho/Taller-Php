<?php
do {
    // Pedir al usuario que ingrese un número
    echo "Por favor, ingrese un número positivo: ";
    
    // Leer la entrada del usuario
    $numero = intval(trim(fgets(STDIN))); // Para entorno CLI, utilizar fgets

    // Verificar si el número es negativo
    if ($numero < 0) {
        echo "El número es negativo. Inténtalo de nuevo.\n";
    }
    
} while ($numero < 0); // Repetir el bucle mientras el número sea negativo

// Imprimir el número positivo ingresado
echo "Número positivo ingresado: $numero\n";
?>
