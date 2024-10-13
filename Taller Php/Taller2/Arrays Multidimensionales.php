<?php
// Definir un array multidimensional con tres productos
$productos = [
    [
        "nombre" => "Producto 1",
        "precio" => 10.5,
        "cantidad_en_stock" => 20
    ],
    [
        "nombre" => "Producto 2",
        "precio" => 15.0,
        "cantidad_en_stock" => 10
    ],
    [
        "nombre" => "Producto 3",
        "precio" => 7.25,
        "cantidad_en_stock" => 50
    ]
];

// Recorrer cada producto y calcular el valor total (precio * cantidad_en_stock)
foreach ($productos as $producto) {
    $valor_total = $producto["precio"] * $producto["cantidad_en_stock"];
    echo "El valor total de {$producto['nombre']} es: $valor_total \n";
}
?>
