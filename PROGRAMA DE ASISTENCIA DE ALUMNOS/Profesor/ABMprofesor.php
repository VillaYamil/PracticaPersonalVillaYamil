<?php 

require_once ('BD/conexion.php');

public function AltaProfesor($nombreProfesor,$apellidoProfesor,$fechaNacimientoProfesor,$dniProfesor){ 

$boolean = 0;


    if ($nombreProfesor && $apellidoProfesor && $fechaNacimientoProfesor && $dniProfesor <> null) {
      
        $query = "insert into profesores(nombreProfesor,apellidoProfesor,fechaNacimientoProfesor,dniProfesor)values(:nombreProfesor,:apellidoProfesor,:fechaNacimientoProfesor,:dniProfesor)";
   
        $STMT = $conn -> prepare($query);
        $STMT -> bindparam(":nombreProfesor",$nombreProfesor);
        $STMT -> bindparam(":apellidoProfesor",$apellidoProfesor);
        $STMT -> bindparam(":fechaNacimientoProfesor",$fechaNacimientoProfesor);
        $STMT -> bindparam(":dniProfesor",$dniProfesor);
        $STMT -> execute();
   
        $boolean = 1;
        echo '<script language="javascript">alert("DATOS REGISTRADOS CON EXITO");window.location.href="index.html"</script>';
   
    }
    
    if($boolean == 0){
        echo "TODOS LOS DATOS SON OBLIGATORIOS";
    }
}
?>