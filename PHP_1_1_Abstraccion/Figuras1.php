<?php

abstract class Figura {
    protected $color;

    protected function __construct($color) {
        $this->color = $color;
    }

    abstract protected function area();

    protected function color() {
        return $this->color;
    }
}

class Circulo extends Figura {
    private $radio;

    function __construct($color, $radio) {
        parent::__construct($color);
        $this->radio = $radio;
    }

    public function area() {
        return pi() * pow($this->radio, 2);
    }

    public function __toString() {
        return "Área del círculo: " . $this->area() . " con color: " . $this->color();
    }
}

class Rectangulo extends Figura {
    private $largo;
    private $ancho;

    public function __construct($color, $largo, $ancho) {
        parent::__construct($color);
        $this->largo = $largo;
        $this->ancho = $ancho;
    }

    public function area() {
        return $this->largo * $this->ancho;
    }

    public function __toString() {
        return "Área del triángulo:" . $this->area() . " de color: " . $this->color();
    }
}

$f1 = new Circulo("Verde", 2.2);
$f2 = new Rectangulo("Rojo", 2, 4);
echo $f1, "\n", $f2;