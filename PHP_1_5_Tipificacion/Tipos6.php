<?php

class Game {
    function __construct($i) {
        print("Game initialization: " . $i . "\n");
    }
}

class BoardGame extends Game {
    function __construct($i) {
        parent::__construct($i);
        print("BoardGame initialization\n");
    }
}

class Chess extends BoardGame {
    function __construct() {
        parent::__construct(11);
        print("Chess initialization\n");
    }
}

new Chess();

// Omitir la línea 18 y observar la salida