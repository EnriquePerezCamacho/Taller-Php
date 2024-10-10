<?php
// Crea un array multidimensional con información de estudiantes
$alumnos = [
    [
        "nombre" => "Juan Pérez",
        "edad" => 20,
        "materias" => [
            "Matemáticas" => 85,
            "Historia" => 90,
            "Ciencias" => 80,
        ]
    ],
    [
        "nombre" => "María López",
        "edad" => 22,
        "materias" => [
            "Matemáticas" => 95,
            "Historia" => 88,
            "Ciencias" => 92,
        ]
    ],
    [
        "nombre" => "Luis Fernández",
        "edad" => 21,
        "materias" => [
            "Matemáticas" => 76,
            "Historia" => 82,
            "Ciencias" => 78,
        ]
    ],
];

// Recorre el array de alumnos
foreach ($alumnos as $alumno) {
    // Inicializa la suma de calificaciones
    $sumaCalificaciones = 0;
    $numeroMaterias = count($alumno["materias"]); // Obtiene el número de materias

    // Recorre las materias y suma las calificaciones
    foreach ($alumno["materias"] as $materia => $calificacion) {
        $sumaCalificaciones += $calificacion;
    }

    // Calcula la calificación promedio
    $promedio = $sumaCalificaciones / $numeroMaterias;

    // Muestra el nombre y la calificación promedio
    echo "Nombre: " . $alumno["nombre"] . "\n";
    echo "Calificación promedio: " . round($promedio, 2) . "\n\n"; // Muestra el promedio redondeado a 2 decimales
}
?>
