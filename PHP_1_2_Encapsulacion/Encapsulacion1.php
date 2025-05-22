<?php

class Punto {
    private $x;
    private $y;

    public function __construct($x, $y) {
        $this->setX($x);
        $this->setY($y);
    }

    public function getX() {
        return $this->x;
    }
    public function getY() {
        return $this->y;
    }
    public function setX($x) {
        $this->x = $x;
    }
    public  function setY($y) {
        $this-> y = $y;
    }
    public function __toString()
    {
        return "(" . $this->getX() . "," . $this->getY() . ")";
    }
}

class Circulo {
    private $c;

    public function __construct(Punto $c, float $r) {
        $this->c = $c;
        $this->r = $r;
    }

    public function getX() {
        return $this->c->getX();
    }
    public function getY() {
        return $this->c->getY();
    }
    public function setX($x) {
        $this->c->setX($x);
    }
    public function setY($y) {
        $this->c->setY($y);
    }
    public function getC(): Punto {
        return $this->c;
    }
    public function getR() {
        return $this->r;
    }
    public function setR($r) {
        $this->r = $r;
    }
    public function __toString() {
        return "(".$this->getX().",".$this->getY()."):".$this->r;
    }
}

$q = new Punto(0.23, -1.69);
echo $q, "\n";
$q->setX(0.005);
echo $q, "\n";
$cc = new Circulo($q, 6.32);
echo $cc, "\n";
$cc->setR(4.69);
echo $cc, "\n";
echo $cc->getC();
echo $q->r . "...."; // No genera error, r sí existe, se creó dinámicamente
$q->r = 5;
echo $q->r;
var_dump($q->r);
unset($q->r); // Destruye la referencia, la cual permanece activa en memoria
var_dump($q->r); // Por la instrucción previa, r existe y su valor es NULL
