<?php
 
class Alumno {

    private $nombre;
    private $apellido;
    private $dni;
    private $fechaNacimiento;

    public function __construct($nombre,$apellido,$dni,$fechaNacimiento){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->dni = $dni;
    $this->fechaNacimiento = $fechaNacimiento;
    }
} 

?>