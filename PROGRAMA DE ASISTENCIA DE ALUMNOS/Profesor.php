<?php 
class Profesor {

    private $nombreProfesor;
    private $apellidoProfesor;
    private $dniProfesor;
    private $fechaNacimientoProfesor;

        public function __construct($nombreProfesor,$apellidoProfesor,$dniProfesor,$fechaNacimientoProfesor){
            $this->nombreProfesor = $nombreProfesor;
            $this->apellidoProfesor = $apellidoProfesor;
            $this->dniProfesor = $dniProfesor;
            $this->fechaNacimientoProfesor = $fechaNacimientoProfesor;
    
        }

}



?>