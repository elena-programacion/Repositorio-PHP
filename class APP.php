<?php


require_once 'class Animal.php';


class APP extends Animal {
   private $nivel_peligrosidad;
   private $tipo_peligrosidad;


   public function __construct($nombre, $especie, $patas, $alimentacion, $sonido, $nivelPeligrosidad, $tipoPeligrosidad) {
       parent::__construct($nombre, $especie, $patas, $alimentacion, $sonido);
       $this->nivelPeligrosidad = $nivelPeligrosidad;
       $this->tipoPeligrosidad = $tipoPeligrosidad;
   }


   public function getNivelPeligrosidad() {
       return $this->nivel_peligrosidad;
   }
   public function setNivelPeligrosidad($nivel_peligrosidad) {
       $this->nivel_peligrosidad = $nivel_peligrosidad;
   }


   public function getTipoPeligrosidad() {
       return $this->tipo_peligrosidad;
   }
   public function setTipoPeligrosidad($tipo_peligrosidad) {
       $this->tipo_peligrosidad = $tipo_peligrosidad;
   }


   public function descripcion() {
       parent::descripcion();
       echo "El nivel de peligrosidad es {$this->nivelPeligrosidad} por su {$this->tipoPeligrosidad}.\n";
   }
}


$aspid = new APP("Áspid", "V. Aspis", "0", "carnívor@", "sisea", "alto", "veneno");
$aspid->descripcion();


?>