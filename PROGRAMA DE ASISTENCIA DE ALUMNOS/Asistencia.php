<?php 

/*require_once('Alumno.php');
require_once('conexion.php');

class Asistencia {
    private $cantidadAsistencia;
    private $conn;
    public function AgregarAsistencia($conn){
        
        $this->conn=$conn;
        $query = "SELECT a.nombre FROM alumnos as a inner join asistencias as asis on a.idAlumno = asis.idAlumno";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $asd = $stmt -> fetchall();
        return $asd;
        
    


    }
}

*/
?>