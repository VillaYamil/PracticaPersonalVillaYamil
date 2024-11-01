<?php 

require_once ('conexion.php');




public function Alta($nombre,$apellido,$fechaNacimiento,$dni){ 

$boolean = 0;


if ($nombre && $apellido && $fechaNacimiento && $dni <> null) {
      
    

    $query = "insert into alumnos(nombre,apellido,fechaNacimiento,dni)values(:nombre,:apellido,:fechaNacimiento,:dni)";
   
    $STMT = $conn -> prepare($query);
    $STMT -> bindparam(":nombre",$nombre);
    $STMT -> bindparam(":apellido",$apellido);
    $STMT -> bindparam(":fechaNacimiento",$fechaNacimiento);
    $STMT -> bindparam(":dni",$dni);
    $STMT -> execute();
   
    $boolean = 1;
    echo '<script language="javascript">alert("DATOS REGISTRADOS CON EXITO");window.location.href="index.html"</script>';
   
 }
    if($boolean == 0){
        echo "TODOS LOS DATOS SON OBLIGATORIOS";
    }
}


};
?>