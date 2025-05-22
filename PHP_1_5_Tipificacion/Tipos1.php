<?php

class Persona {
    public $nombre;
    public $edad;

    function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    static function del_anio($nombre, $anio) {
        return new Persona($nombre, date("Y")- $anio);
    }

    static function es_adulto($edad) {
        return $edad > 18;
    }
}

$persona1 = new Persona('mayank', 21);
$persona2 = Persona::del_anio('mayank', 1996);

print($persona1->edad . "\n");
print($persona2->edad . "\n");
print(Persona::es_adulto(22));
