<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $dni = htmlspecialchars($_POST['dni']);
    $email = htmlspecialchars($_POST['email']);
    $fecha_nacimiento = htmlspecialchars($_POST['fecha_nacimiento']);
    $tipo = htmlspecialchars($_POST['tipo']);

    // Mostrar los datos recibidos
    echo "<h2>Datos recibidos:</h2>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
    echo "DNI: " . $dni . "<br>";
    echo "Correo Electrónico: " . $email . "<br>";
    echo "Fecha de Nacimiento: " . $fecha_nacimiento . "<br>";
    echo "Tipo: " . $tipo . "<br>";
} else {
    echo "El formulario no ha sido enviado correctamente.";
}
?>