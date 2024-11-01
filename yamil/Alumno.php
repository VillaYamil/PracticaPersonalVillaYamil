<?php

class Alumno {
    private $conn;
    private $table = 'alumnos';

    public $id;
    public $nombre;
    public $apellido;
    //public $telefono;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Método para crear un nuevo alumno
    public function create() {
        $query = "INSERT INTO " . $this->table . " (nombre, apellido) VALUES (:nombre, :apellido)";
        
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        //$stmt->bindParam(':telefono', $this->telefono);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }


    public function getAll() {
        $query = "SELECT nombre, apellido FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getDetails() {
        $query = "SELECT nombre, apellido FROM " . $this->table . " WHERE nombre = :nombre AND apellido = :apellido LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    // Otros métodos (read, update, delete) se podrían implementar aquí
}

