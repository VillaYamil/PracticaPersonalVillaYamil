<?php 

require_once('BD/conexion.php');
require_once('Asistencia.php');
require_once('Alumno.php');
require_once('Alumno/Alta.php');
require_once('Alumno/Baja.php');
require_once('Alumno/Modificar.php');
  /*
  $dni = $_POST['dni'];
  $query = "SELECT idAlumno 
            FROM alumnos
            WHERE dni = $dni";
  $STMT = $conn -> prepare($query);
  $STMT -> execute();
  $idAlumno = $STMT ->fetch();    

  $query = "SELECT asis.cantidadAsistencia 
            FROM alumnos as a inner join asistencias as asis on ".$idAlumno['idAlumno']." = asis.idAlumno";
  $STMT = $conn -> prepare($query);
  $STMT -> execute();
  $ejemplo = $STMT->fetch();
  echo($ejemplo['cantidadAsistencia']);
  */  
  if (isset($_POST["Alumnos"])) {
    $query = "SELECT * 
    FROM alumnos";
    $STMT = $conn -> prepare($query);
    $STMT -> execute();
    $Alumnos = $STMT ->fetchAll();

    foreach($Alumnos as $element){
      $id = ($element["idAlumno"]);
      $nombre = ($element["nombre"]) ;
      $apellido = ($element["apellido"]);
      $fechaNacimiento = ($element["fechaNacimiento"]);
      $dni = ($element["dni"]);
      echo " ".$id."  ".$nombre ."  ". $apellido." ".$fechaNacimiento."  ". $dni."  ";
    }
  } elseif (isset($_POST["Profesores"])){
    $query = "SELECT * 
    FROM profesores";
    $STMT = $conn -> prepare($query);
    $STMT -> execute();
    $Profesor = $STMT ->fetchAll();

    
    foreach($Profesor as $element){
      $id = ($element["idProfesor"]);
      $nombre = ($element["nombreProfesor"]) ;
      $apellido = ($element["apellidoProfesor"]);
      $fechaNacimiento = ($element["fechaNacimientoProfesor"]);
      $dni = ($element["dni"]);
      echo " ".$id."  ".$nombre ."  ". $apellido." ".$fechaNacimiento."  ". $dni."  ";
    }
  }  


?>


