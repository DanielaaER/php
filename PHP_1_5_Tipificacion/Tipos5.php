<?php

class Rectangulo {
    private $largo;
    private $ancho;

    function __construct($largo, $ancho) {
        $this->largo = $largo;
        $this->ancho = $ancho;
    }

    function area() {
        return $this->largo * $this->ancho;
    }

    function perimetro() {
        return $this->largo*2 + $this->ancho*2;
    }
}

class Cuadrado extends Rectangulo {
    function __construct($largo) {
        parent::__construct($largo, $largo);
    }
}

$c = new Cuadrado(4);
print("Área del cuadrado: " . $c->area() . "\n");
print("Perímetro del cuadrado :". $c->perimetro() . "\n");

$r = new Rectangulo(2, 4);
print("Área del rectángulo: " . $r->area() . "\n");
print("Perímetro del rectángulo: " . $r->perimetro() . "\n");