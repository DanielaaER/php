<?php
echo "Hola mundo cruel de PHP<br>";

$x = True;
echo "Valor booleano: ";
echo $x;
echo "<br>";

$i = 1234;
echo $i;
echo "<br>";

var_dump(25/7);

$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

echo "<br>";
if(abs($a-$b) < $epsilon)
    echo "true";

$array = array(
    "foo" => "bar",
    "bar" => "foo",
);

echo "<br>";
var_dump($array);

echo "<br>";
$array = array("foo", "bar", "hello", "world");
var_dump($array);
