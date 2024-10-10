<?php
// 1. Declare una variable llamada $nombre y asígnale tu nombre.
$nombre = "Enrique";
// 2. Imprima un saludo utilizando la función echo como: "Hola, mi nombre es tu nombre
echo "Hola, mi nombre es " . $nombre . ".";

// 3. Define una constante llamada PI con el valor 3.1416 y muestra su valor en pantalla.
define('PI', 3.1416);
echo "<br>El valor de PI es: " . PI;

// 4.Prueba con dos variables cuyos nombres solo difieran en mayúsculas y demuestra que PHP es sensible a mayúsculas y minúsculas.
$variable1 = 5;
$Variable1 = "Soy Enrique";
echo "<br>Esta es la minuscula: " . $variable1;
echo "<br>Ahora con Mayuscula (con mayúscula inicial): " . $Variable1;
class Persona {
    public $nombre;
    public $edad;
    }
    $juan = new Persona();
    $juan->nombre = "Juan";
    $juan->edad = 30;

    echo juan . edad;
?>
