<?php

require_once 'conexion.php';
require_once 'Alumno.php';
require_once 'crear_alumno.php';

// Crear una instancia de la conexión a la base de datos
$database = new Database();
$db = $database->connect();

// Crear una instancia de Alumno
$alumno = new Alumno($db);

// Asignar valores a las propiedades, asegurándote de que no estén vacíos
if (!empty($_POST['nombre']) && !empty($_POST['apellido'])) {
    $alumno->nombre = $_POST['nombre'];
    $alumno->apellido = $_POST['apellido'];

    // Intentar crear un nuevo registro
    if ($alumno->create()) {
        echo "Alumno creado exitosamente.<br>";
        header("Location: crear_alumno.php");
            exit();
    } else {
        echo "Error al crear el alumno. Crear otro alumno?";

    }
} else {
    echo "Por favor, complete los campos de nombre y apellido.<br>";
}

// Mostrar todos los alumnos creados
echo "<h2>Todos los alumnos:</h2>";
$allAlumnos = $alumno->getAll();
if ($allAlumnos) {
    foreach ($allAlumnos as $alumnoItem) {
        $nombre = !empty($alumnoItem['nombre']) ? htmlspecialchars($alumnoItem['nombre']) : 'Nombre no disponible';
        $apellido = !empty($alumnoItem['apellido']) ? htmlspecialchars($alumnoItem['apellido']) : 'Apellido no disponible';
        echo "Nombre: " . $nombre . " - ";
        echo "Apellido: " . $apellido . "<br>";
    }
} else {
    echo "No hay alumnos registrados.";
}
