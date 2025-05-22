<?php

class Perico {
    function volar() {
        print "Perico volando\n";
    }
    function nadar() {
        print "Un perico no nada\n";
    }
}

class Pinguino {
    function volar() {
        print "Un pingüino no vuela\n";
    }
    function nadar() {
        print "Pingüino nadando";
    }
}

class Ballena {}
class Cachalote extends Ballena {}

# Interfaz común
function prueba_de_vuelo($ave) {
    $ave->volar();
}

$pe = new Perico();
$pi = new Pinguino();
$ba = new Ballena();
prueba_de_vuelo($pe);
prueba_de_vuelo($pi);
// prueba_de_vuelo($ba);

echo is_a($pe, "Perico"), "\n";
$x = get_parent_class($ba);
echo $x, "-\n";
echo get_parent_class("Perico"), "--\n";
echo get_parent_class("Cachalote"), "---\n";