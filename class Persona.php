<?php

class Persona {
    private $nombre;
    private $apellidos;
    private $nacimiento;
    private $dni;
    private $direccion;
    private $localidad;
    private $telefono;

    public function __construct($nombre, $apellidos, $nacimiento, $dni, $direccion, $localidad, $telefono) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->nacimiento = $nacimiento;
        $this->dni = $dni;
        $this->direccion = $direccion;
        $this->localidad = $localidad;
        $this->telefono = $telefono;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getNacimiento() {
        return $this->nacimiento;
    }
    public function setNacimiento($nacimiento) {
        $this->nacimiento = $nacimiento;
    }

    public function getDni() {
        return $this->dni;
    }
    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getDireccion() {
        return $this->direccion;
    }
    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getLocalidad() {
        return $this->localidad;
    }
    public function setLocalidad($localidad) {
        $this->localidad = $localidad;
    }

    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function presentarse() {
        echo "Buenas, me llamo " . $this->nombre . " " . $this->apellidos . ".\n";
    }

    public function envioPostal() {
        echo "Dirección Postal:\n";
        echo $this->direccion . ", " . $this->localidad . ", " . $this->telefono . ".\n";
    }

    public function edad() {
        $fechaNacimiento = DateTime::createFromFormat('d/m/Y', $this->nacimiento);
        $fechaActual = new DateTime();
        $edad = $fechaActual->diff($fechaNacimiento)->y;
        return $edad;
    }

    public function datosFacturacion() {
        echo "Datos de Facturación:\n";
        echo "Apellidos y nombre: " . $this->apellidos . ", " . $this->nombre . "\n";
        echo "DNI: " . $this->dni . "\n";
        echo "Dirección: " . $this->direccion . ", " . $this->localidad . "\n";
    }
}
$persona1 = new Persona("Alan", "Moore", "18/11/1953", "DNI12345678", "Inglaterra", "Northampton", "111 222 333");
$persona2 = new Persona("Neil", "Gaiman", "10/11/1960", "DNI87654321", "Inglaterra", "Portchester", "444 555 666");

$persona1->presentarse();
$persona1->envioPostal();
echo "Edad: " . $persona1->edad() . " años.\n";
$persona1->datosFacturacion();

echo "\n";

$persona2->presentarse();
$persona2->envioPostal();
echo "Edad: " . $persona2->edad() . " años.\n";
$persona2->datosFacturacion();

?>