<?php

class Grain{
    function __toString() {
        return "Grain\n";
    }
}

class Wheat extends Grain {
    function __toString() {
        return "Wheat\n";
    }
}

class Mill {
    function process() {
        return new Grain();
    }
    function process2() {
        return 7.7;
    }
}

class WheatMill extends Mill {
    function process() {
        return new Wheat();
    }
    function process2() {
        return "x";
    }
}

$m = new Mill();
$g = $m->process();
print($g);
$m = new WheatMill();
$g = $m->process();
print($g);