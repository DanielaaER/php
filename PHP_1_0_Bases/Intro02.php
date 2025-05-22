<?php
$a = rand(1,100);
$b = rand(1,100);

echo $a . " , " . $b . "<br>";

if($a > $b)
    echo "El mayor es a: " . $a . "<br>";
elseif($a < $b)
    echo "El mayor es b: " . $b . "<br>";
else
    echo "a y b son iguales";

if($a > $b):
    echo "El mayor es a: " . $a . "<br>";
elseif($a < $b):
    echo "El mayor es b: " . $b . "<br>";
else:
    echo "a y b son iguales";
endif;


$c = rand(1,21);
switch ($c) {
    case 10:
        echo "Decena<br>";
        break;
    case 20:
        echo "Dos decenas<br>";
        break;
    default:
        echo "Demasiados números...<br>";
}

switch ($c):
    case 10:
        echo "Decena<br>";
        break;
    case 20:
        echo "Dos decenas<br>";
        break;
    default:
        echo "Demasiados números...<br>";
endswitch;

$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}

$i = 1;
while ($i <= 10):
    echo $i . "<br>";
    $i++;
endwhile;

// PHP soporta break y continue para los ciclos while, do-while y for
/* Investigar cómo funcionan y si hay propiedades diferentes a
   las conocidas en Java y Python */

$i = 1;
do {
    echo $i . "<br>";
    $i++;
} while ($i <= 10);

// No se soporta la notación de ":"

$total = 0;

echo "Total: " . $total . "<br>";

for ($i= 1; $i <= 10; $i++):
    $total += $i;
endfor;
echo "Total: " . $total . "<br>";
for ($i= 1; $i <= 10; $i++) {
    $total += $i;
}
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
foreach ($arr as &$value):
    $value = $value * 2;
endforeach;
print_r($arr);
unset($value); // Destruye la referencia, la cual permanece activa en memoria

function saludar() {
    echo "Hola///";
}
register_tick_function("saludar");
declare(ticks = 3) {
    for($i = 0; $i < 10; $i++) {
        echo "PHP<br>";
    }
}

// ¿Qué parecido tiene la función register_tick_function con continue?