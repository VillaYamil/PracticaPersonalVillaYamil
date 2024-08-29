<?php
class Persona(){
    public $nombre;
    public $apellido;
    public $fecha_nacimiento;
    public $dni;

    function __construct($nombre, $apellido, $fecha_nacimiento, $dni){
        $this -> nombre=$nombre;
        $this -> apellido=$apellido;
        $this -> fecha_nacimiento=$fecha_nacimiento;
        $this -> dni=$dni;
    }
}

?>