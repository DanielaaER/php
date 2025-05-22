<?php

class Useful {
    function f() {
        print("Useful.f()\n");
    }
    function g() {
        print("Useful.g()\n");
    }
}


class MoreUseful extends Useful {
    function f() {
        print("MoreUseful.f()\n");
    }
    function g() {
        print("MoreUseful.g()\n");
    }
    function u() {
        print("MoreUseful.u()\n");
    }
    function v() {
        print("MoreUseful.v()\n");
    }
    function w() {
        print("MoreUseful.w()\n");
    }
}


$x = array(new Useful(), new MoreUseful());
$x[0]->f();
$x[1]->g();
$x[1]->u();
// $x[0]->u();

#		x[0].f();
#		x[1].g();
# //	x[1].u();
#		((MoreUseful) x[1]).u();
#		((MoreUseful) x[0]).u();