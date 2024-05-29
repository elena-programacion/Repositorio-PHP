<?php

require_once 'class Persona.php';
class Curso {
    private $nombre;
    private $horario;
    private $fechaInicio;
    private $fechaFin;
    private $horas;
    private $codigo;
    private $profesor;

    public function __construct($nombre, $horario, $fechaInicio, $fechaFin, $horas, $codigo, $profesor) {
        $this->nombre = $nombre;
        $this->horario = $horario;
        $this->fechaInicio = $fechaInicio;
        $this->fechaFin = $fechaFin;
        $this->horas = $horas;
        $this->codigo = $codigo;
        $this->profesor = $profesor;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getHorario()
    {
        return $this->horario;
    }
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }

    public function getFechaFin()
    {
        return $this->fechaFin;
    }
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    }

    public function getHoras()
    {
        return $this->horas;
    }
    public function setHoras($horas)
    {
        $this->horas = $horas;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getProfesor()
    {
        return $this->profesor;
    }
    public function setProfesor($profesor)
    {
        $this->profesor = $profesor;
    }


    public function obtenerProfesor() {
        return $this->profesor->getNombre() . " " . $this->profesor->getApellidos();
    }
}

$profesor = new Persona("Fernando", "Fernández", "11/09/1985", "DNI", "España", "Sax", "777 888 999");
$curso = new Curso("Programación", "L-V. 15.00-21.00", "Enero", "Julio", "590h.", "Código", $profesor);

echo "El curso de " . $curso->getNombre() . " estará impartido por " . $curso->obtenerProfesor();

?>