<?php
// Mostrar el menú de opciones
echo "Elige una opción:\n";
echo "1. Sumar\n";
echo "2. Restar\n";
echo "3. Multiplicar\n";
echo "4. Dividir\n";

// Leer la opción seleccionada por el usuario
$opcion = intval(trim(fgets(STDIN)));

// Pedir al usuario que ingrese dos números
echo "Ingresa el primer número: ";
$numero1 = floatval(trim(fgets(STDIN)));

echo "Ingresa el segundo número: ";
$numero2 = floatval(trim(fgets(STDIN)));

// Switch para seleccionar la operación
switch ($opcion) {
    case 1:
        // Sumar
        $resultado = $numero1 + $numero2;
        echo "El resultado de la suma es: $resultado\n";
        break;

    case 2:
        // Restar
        $resultado = $numero1 - $numero2;
        echo "El resultado de la resta es: $resultado\n";
        break;

    case 3:
        // Multiplicar
        $resultado = $numero1 * $numero2;
        echo "El resultado de la multiplicación es: $resultado\n";
        break;

    case 4:
        // Dividir
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
            echo "El resultado de la división es: $resultado\n";
        } else {
            echo "Error: No se puede dividir por cero.\n";
        }
        break;

    default:
        // Opción inválida
        echo "Opción no válida. Por favor, selecciona una opción correcta.\n";
        break;
}
?>
