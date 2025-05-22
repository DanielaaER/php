<?php

interface PuedePelear {
    function pelear();
}

interface PuedeNadar {
    function nadar();
}

interface PuedeVolar {
    function volar();
}

class Accion {
    function pelear() {}
}

class Heroe extends Accion implements PuedeNadar, PuedePelear, PuedeVolar {
    function nadar() {}
    function volar() {}
}

function t(PuedePelear $x) {
    $x->pelear();
}

function u(PuedeNadar $x) {
    $x->nadar();
}

function v(PuedeVolar $x) {
    $x->volar();
}

function w(Accion $x) {
    $x->pelear();
}

$h = new Heroe();
t($h);
u($h);
v($h);
w($h);