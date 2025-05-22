<?php

class Elemento {
    function __construct($alcance) {
        print "Elemento->__construct() " . $alcance . "\n";
    }
}

class Componente {
    static $var_cls;
    private $var_obj;
    public function __construct() {
        print "Componente->__construct()\n";
        var_dump($this->var_obj);
        print $this->var_obj;
        print Componente::$var_cls;
        $this->var_obj = new Elemento("obj");
        Componente::$var_cls = new Elemento("cls");
    }
}

new Componente();
