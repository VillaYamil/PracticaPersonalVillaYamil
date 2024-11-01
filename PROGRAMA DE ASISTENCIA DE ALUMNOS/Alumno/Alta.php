<?php 
require_once ('BD/conexion.php');

class Alta{ 
    private $conn;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $dni;
    private $boolean = 0;
    
    function __construct($conn, $nombre, $apellido, $fechaNacimiento,$dni) {
        $this->conn = $conn;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->dni = $dni;


        if ($nombre && $apellido && $fechaNacimiento && $dni <> null) {
            $query = "INSERT INTO alumnos (nombre, apellido, fechaNacimiento, dni) VALUES (:nombre, :apellido, :fechaNacimiento, :dni)";

            $STMT = $conn->prepare($query);
            $STMT->bindParam(":nombre", $nombre);
            $STMT->bindParam(":apellido", $apellido);
            $STMT->bindParam(":fechaNacimiento", $fechaNacimiento);
            $STMT->bindParam(":dni", $dni);
            $STMT->execute();
            $boolean = 1;
            echo '<script language="javascript">alert("DATOS REGISTRADOS CON EXITO");window.location.href="index.html"</script>';
   
        }   if($boolean == 0){
            echo "TODOS LOS DATOS SON OBLIGATORIOS";
        }
    }
};


?>