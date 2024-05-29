<?php

require_once 'class Persona.php';

class Trabajador extends Persona {
    private $horario;
    private $fecha_incorporacion;
    private $salario;
    private $puesto;

    public function __construct($nombre, $apellidos, $nacimiento, $dni, $direccion, $localidad, $telefono, $horario, $fecha_incorporacion, $salario, $puesto) {
        parent::__construct($nombre, $apellidos, $nacimiento, $dni, $direccion, $localidad, $telefono);
        $this->horario = $horario;
        $this->fecha_incorporacion = $fecha_incorporacion;
        $this->salario = $salario;
        $this->puesto = $puesto;
    }
    public function getHorario() {
        return $this->horario;
    }
    public function setHorario($horario) {
        $this->horario = $horario;
    }

    public function getFechaIncorporacion() {
        return $this->fecha_incorporacion;
    }
    public function setFechaIncorporacion($fecha_incorporacion) {
        $this->fecha_incorporacion = $fecha_incorporacion;
    }

    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getPuesto() {
        return $this->puesto;
    }
    public function setPuesto($puesto) {
        $this->puesto = $puesto;
    }

    public function calcularAntiguedad() {
        $fechaIncorporacion = DateTime::createFromFormat('d/m/Y', $this->fecha_incorporacion);
        $fechaActual = new DateTime();
        $antiguedad = $fechaActual->diff($fechaIncorporacion);

        return $antiguedad->y . " años, " . $antiguedad->m . " meses, " . $antiguedad->d . " días";
    }
}

$trabajador1 = new Trabajador("Alan", "Moore", "18/11/1953", "DNI12345678", "Inglaterra", "Northampton", "111 222 333", "9:00-17:00", "01/01/2000", 3000, "Escritor");
$trabajador2 = new Trabajador("Neil", "Gaiman", "10/11/1960", "DNI87654321", "Inglaterra", "Portchester", "444 555 666", "10:00-18:00", "15/05/2005", 3500, "Guionista");

$trabajador1->presentarse();
echo "Horario: " . $trabajador1->getHorario() . "\n";
echo "Fecha de Incorporación: " . $trabajador1->getFechaIncorporacion() . "\n";
echo "Salario: " . $trabajador1->getSalario() . "\n";
echo "Puesto: " . $trabajador1->getPuesto() . "\n";
echo "Antigüedad: " . $trabajador1->calcularAntiguedad() . "\n";

echo "\n";

$trabajador2->presentarse();
echo "Horario: " . $trabajador2->getHorario() . "\n";
echo "Fecha de Incorporación: " . $trabajador2->getFechaIncorporacion() . "\n";
echo "Salario: " . $trabajador2->getSalario() . "\n";
echo "Puesto: " . $trabajador2->getPuesto() . "\n";
echo "Antigüedad: " . $trabajador2->calcularAntiguedad() . "\n";

?>