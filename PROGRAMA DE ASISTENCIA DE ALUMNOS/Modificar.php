<?php
require_once('conexion.php');

class Modificar {
    private $conn;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;

    function __construct($conn, $nombre, $apellido, $fechaNacimiento, $dni) {
        $this->conn = $conn;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;

        if ($nombre && $apellido && $fechaNacimiento <> null) {
            $query = "UPDATE alumnos SET nombre=:nombre, apellido=:apellido, fechaNacimiento=:fechaNacimiento
                      WHERE dni = $dni";

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':fechaNacimiento', $fechaNacimiento);
            $stmt->execute();
            echo "Se modificó correctamente";
        } else {
            echo "Error al modificar los datos";
        }
    }
}


?>
