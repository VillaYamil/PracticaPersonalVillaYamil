<?php 
require_once ('BD/conexion.php');

class AltaProfesor{ 
    private $conn;
    private $nombreProfesor;
    private $apellidoProfesor;
    private $fechaNacimientoProfesor;
    private $dniProfesor;
    private $boolean = 0;
    
        function __construct($conn, $nombreProfesor, $apellidoProfesor, $fechaNacimientoProfesor, $dniProfesor) {
            $this->conn = $conn;
            $this->nombreProfesor = $nombreProfesor;
            $this->apellidoProfesor = $apellidoProfesor;
            $this->fechaNacimientoProfesor = $fechaNacimientoProfesor;
            $this->dniProfesor = $dniProfesor;


            if ($nombreProfesor && $apellidoProfesor && $fechaNacimientoProfesor && $dniProfesor <> null) {
                $query = "INSERT INTO alumnos (nombreProfesor, apellidoProfesor, fechaNacimientoProfesor, dniProfesor) VALUES (:nombreProfesor, :apellidoProfesor, :fechaNacimientoProfesor, :dniProfesor)";

                $STMT = $conn->prepare($query);
                $STMT->bindParam(":nombreProfesor", $nombreProfesor);
                $STMT->bindParam(":apellidoProfesor", $apellidoProfesor);
                $STMT->bindParam(":fechaNacimientoProfesor", $fechaNacimientoProfesor);
                $STMT->bindParam(":dniProfesor", $dniProfesor);
                $STMT->execute();
                $boolean = 1;
                echo '<script language="javascript">alert("DATOS REGISTRADOS CON EXITO");window.location.href="index.html"</script>';
   
            }   if($boolean == 0){
                    echo "TODOS LOS DATOS SON OBLIGATORIOS";
                }
        }
};


?>