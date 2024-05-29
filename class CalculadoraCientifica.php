<?php

require_once 'class Calculadora.php';

class CalculadoraCientifica extends Calculadora {

    public function potencia() {
        return pow($this->x, $this->y);
    }

    public function raizCuadrada() {
        if ($this->x < 0 || $this->y < 0) {
            return "Error: Raíz cuadrada de un número negativo.";
        } else {
            return [sqrt($this->x), sqrt($this->y)];
        }
    }
}

$calc = new CalculadoraCientifica(10, 5);

echo "Potencia: " . $calc->potencia() . "\n";
echo "Raíz: " . implode(", ", $calc->raizCuadrada()) . "\n";

?>