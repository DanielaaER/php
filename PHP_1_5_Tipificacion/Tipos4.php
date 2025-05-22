<?php

interface I1 {
    function f();
}

interface I2 {
    function f(int $i);
}

interface I3 {
    function f();
}

class C {
    public function f() {
        return 1;
    }
}
// Clase incompatible, PHP no soporta sobrecarga
// class C2 implements I1, I2 {
//     public function f() {}
//     public function f(int $i) {
//         return 1;
//     } // overloaded
// }
// Utilizar argumentos de longitud variable para resolver la falta de sobrecarga (...$x)

class C3 extends C implements I2 {
    public function f(int $i) {
        return 1;
    } // overloaded
}

class C4 extends C implements I3 {
    // Identical, no problem:
    public function f() {
        return 1;
    }
}

// La tipificación débil permite las siguientes definiciones
class C5 extends C implements I1 {}
interface I4 extends I1, I3 {}