<?php 

require_once ('BD/conexion.php');

class BajaProfesor{ 
    private $conn;
    private $dniProfesor;
    private $boolean = 0;
    
    public function Delete($conn, $dniProfesor) {
        $this->conn = $conn;
        $this->dniProfesor = $dniProfesor;
    
        if ($dni <> null) {
            // Prepara la consulta con un marcador de posición
            $query = "DELETE FROM alumnos 
                      WHERE dniProfesor=:dniProfesor";
    
            $STMT = $this->conn->prepare($query);
            $STMT->bindParam(":dniProfesor", $this->dniProfesor);
            $STMT->execute();
            $boolean = 1;
            echo '<script language="javascript">alert("DATOS ELIMINADOS CON EXITO");window.location.href="index.html"</script>';
        }   else {
                echo "TODOS LOS DATOS SON OBLIGATORIOS";
            }
        }
};





?>