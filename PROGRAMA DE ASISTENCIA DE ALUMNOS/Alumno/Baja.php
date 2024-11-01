<?php 

require_once ('BD/conexion.php');

class Baja{ 
    private $conn;
    private $dni;
    private $boolean = 0;
    
    public function Delete($conn, $dni) {
        $this->conn = $conn;
        $this->dni = $dni;
    
        if ($dni <> null) {
            // Prepara la consulta con un marcador de posición
            $query = "DELETE FROM alumnos 
                      WHERE dni=:dni";
    
            $STMT = $this->conn->prepare($query);
            $STMT->bindParam(":dni", $this->dni);
            $STMT->execute();
            $boolean = 1;
            echo '<script language="javascript">alert("DATOS ELIMINADOS CON EXITO");window.location.href="index.html"</script>';
        } else {
            echo "TODOS LOS DATOS SON OBLIGATORIOS";
        }
    }
};





?>