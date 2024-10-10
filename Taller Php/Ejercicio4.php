<?php
$numero = -5;

if ($numero > 0) {
    echo "El número es positivo.<br>";
} elseif ($numero < 0) {
    echo "El número es negativo.<br>";
} else {
    echo "El número es cero.<br>";
}

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo "<br>";

$suma = 0;
$i = 1;
while ($i <= 100) {
    $suma += $i;
    $i++;
}
echo "La suma de los números del 1 al 100 es: " . $suma . "<br>";

$dia = 3;
switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    default:
        echo "Día inválido";
}
echo "<br>";

$nombres = array("Juan", "María", "Pedro", "Ana");
foreach ($nombres as $nombre) {
    echo $nombre . " ";
}