<?php

class Bowl {
  function __construct($marker) {
      print("Bowl.__construct(" . $marker . ")\n");
  }

  function f1($marker) {
      print("f1(" . $marker . ")\n");
  }
}

class Table {
    // PHP no permite la inicialización de variables de instancia
    // La inicialización debe hacerse desde un constructor
    static $bowl1; // PHP permite utilizar 'var' si no se especifica visibilidad o alcance (objeto/clase)

    function __construct() {
        Table::$bowl1 = new Bowl(1);
        Table::$bowl2 = new Bowl(2);
        print("Table.__construct()\n");
        Table::$bowl2->f1(1);
    }

    function f2($marker) {
        print("f2(" . $marker . ")\n");
    }
    static $bowl2;
}

print("HOLA\n");

class Cupboard {
    var $bowl3;
    static $bowl4;

    function __construct() {
        $bowl4 = new Bowl(4);
        $bowl5 = new Bowl(5);
        $this->bowl3 = new Bowl(3);
        print("Cupboard.__construct()\n");
        $bowl4->f1(2);
    }

    function f3($marker) {
        print("f3(" . $marker . ")\n");
    }

    static $bowl5;
}

class StaticInitialization {
    function __construct() {
        StaticInitialization::$table = new Table();
        StaticInitialization::$cupboard = new Cupboard();
    }

    public static function main() {
        //new StaticInitialization();
        print "Creating new Cupboard() in main\n";
        new Cupboard();
        print "Creating new Cupboard() in main\n";
        new Cupboard();
        // Sentencias inalcanzables debido a la inicialización en el constructor
        //StaticInitialization::$table->f2(1);
        //StaticInitialization::$cupboard->f3(1);
    }

    static $table;
    static $cupboard;
}

StaticInitialization::main();

print("ADIOS");