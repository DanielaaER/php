<?php

interface Ave {
    function volar();
    function nadar();
}

class Perico implements Ave {
    function volar() {
        print "Perico volando\n";
    }
    function nadar() {
        print "Un perico no nada\n";
    }
}

class Pinguino implements Ave {
    function volar() {
        print "Un pingüino no vuela\n";
    }
    function nadar() {
        print "Pingüino nadando";
    }
}

# Interfaz común
function prueba_de_vuelo(Ave $ave) {
  // PHP es de tipificación débil, pero especificar el tipo
  // permite asegurar que el tipo sea del indicado. Ejecutar
  // el código con y sin tipo Ave paara observar el mensaje
  // de error, el cual difiere en cada caso.
  $ave->volar();
}

class X {}

$pe = new Perico();
$pi = new Pinguino();

prueba_de_vuelo($pe);
prueba_de_vuelo($pi);
prueba_de_vuelo(new X());

echo get_parent_class($pe);
echo get_parent_class($pi);
