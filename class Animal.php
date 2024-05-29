<?php

class Animal {
	private $nombre;
	private $especie;
	private $patas;
	private $alimentacion;
	private $sonido;

	public function __construct($nombre, $especie, $patas, $alimentacion, $sonido) {
		$this->nombre = $nombre;
		$this->especie = $especie;
		$this->patas = $patas;
		$this->alimentacion = $alimentacion;
		$this->sonido = $sonido;
	}

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEspecie() {
        return $this->especie;
    }
    public function setEspecie($especie) {
        $this->especie = $especie;
    }

    public function getPatas() {
        return $this->patas;
    }
    public function setPatas($patas) {
        $this->patas = $patas;
    }

    public function getAlimentacion() {
        return $this->alimentacion;
    }
    public function setAlimentacion($alimentacion) {
        $this->alimentacion = $alimentacion;
    }

    public function getSonido() {
        return $this->sonido;
    }
    public function setSonido($sonido) {
        $this->sonido = $sonido;}


    public function descripcion() {
        echo "El {$this->nombre} pertenece a la especie {$this->especie}. Posee {$this->patas} patas y es considerado {$this->alimentacion}.\n";
    }
}

$gato = new Animal("Gato", "Felidae", "4 ", "carnívoro", "maulla");
$gato->descripcion();

$perro = new Animal("Perro", "Canis Lupus", "4 ", "carnívoro", "ladra");
$perro->descripcion();

?>