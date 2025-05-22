<?php


class Dad {
    function Dad()
    {
        // implements some logic
    }
}

class Child extends Dad {
    function Child()
    {
        echo "I'm ", get_parent_class($this), "'s son\n";
    }
}

class Child2 extends Dad {
    function Child2()
    {
        echo "I'm ", get_parent_class(new Child()), "'s son too\n";
    }
}

// get_parent_class($cls) recupera la clase padre de la clase indicada como argumento en $cls

$foo = new Child();
$bar = new Child2();

class X extends stdClass {} // stdClass es una clase de PHP que representa un objeto genérico

$x = new X();
echo get_parent_class($x);
