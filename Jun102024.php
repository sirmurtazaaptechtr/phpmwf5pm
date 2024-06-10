<?php
$cars = array("Volvo", "BMW", "Toyota");

// array_splice($cars,1,1);
unset($cars[1]);

$cars[1] = "Ali Baba";

// k = key; r = reverse
// sort($cars);
// rsort($cars);
ksort($cars);
// krsort($cars);

echo "<pre>";
print_r($cars);
echo "</pre>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";

