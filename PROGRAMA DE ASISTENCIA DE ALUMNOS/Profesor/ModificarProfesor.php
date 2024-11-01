<?php 
require_once('BD/conexion.php');

class ModificarProfesor { 
    private $conn;
    private $nombreProfesor;
    private $apellidoProfesor;
    private $fechaNacimientoProfesor;

        function __construct($conn, $nombreProfesor, $apellidoProfesor, $fechaNacimientoProfesor, $dniProfesor) {
            $this->conn = $conn;
            $this->nombreProfesor = $nombreProfesor;
            $this->apellidoProfesor = $apellidoProfesor;
            $this->fechaNacimientoProfesor = $fechaNacimientoProfesor;

                if ($nombreProfesor && $apellidoProfesor && $fechaNacimientoProfesor <> null) {
                $query = "UPDATE profesores SET nombreProfesor=:nombreProfesor, apellidoProfesor=:apellidoProfesor, fechaNacimientoProfesor=:fechaNacimientoProfesor
                        WHERE dniProfesor = $dniProfesor";

                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':nombreProfesor', $nombreProfesor);
                $stmt->bindParam(':apellidoProfesor', $apellidoProfesor);
                $stmt->bindParam(':fechaNacimientoProfesor', $fechaNacimientoProfesor);
                $stmt->execute();
                echo "Se modificó correctamente";
                } else {
                    echo "Error al modificar los datos";
                }
        }
}

?>