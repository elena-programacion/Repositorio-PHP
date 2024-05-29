<?php

class Calculadora {
   protected $x;
   protected $y;

   public function __construct($x, $y) {
       $this->x = $x;
       $this->y = $y;
   }

   public function getX() {
        return $this->x;
    }
    public function setX($x) {
        $this->x = $x;
    }

    public function getY() {
        return $this->y;
    }
    public function setY($y) {
        $this->y = $y;
    }

   public function sumar() {
       return $this->x + $this->y;
   }

   public function restar() {
       return $this->x - $this->y;
   }

   public function multiplicar() {
       return $this->x * $this->y;
   }

   public function dividir() {
       if ($this->y != 0) {
           return $this->x / $this->y;
       } else {
           return "Error: División por cero.";
       }
   }
}

$calc = new Calculadora(10, 5);

echo "Suma: " . $calc->sumar() . "\n";
echo "Resta: " . $calc->restar() . "\n";
echo "Multiplicación: " . $calc->multiplicar() . "\n";
echo "División: " . $calc->dividir() . "\n";

?>