<?php

class Volador {
    function volar() {
        print "Volando\n";
    }
}

trait Extraterrestre {
    function golpear() {
        print "Golpeando\n";
    }
}

trait Debil {
    function debilitar() {
        print "¡La fuerza se reduce!\n";
    }
}

class Superman extends Volador {
    use Extraterrestre;
    use Debil;

    function defender() {
        print "Defendiendo el planeta\n";
    }
}

$superheroe = new Superman();

$superheroe->volar();
$superheroe->defender();
$superheroe->golpear();
$superheroe->debilitar();