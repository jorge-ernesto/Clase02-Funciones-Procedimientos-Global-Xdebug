<?php

//Array escalar cuando sus indices son numericos
//Array asociativo cuando sus indices son textos
//Array mixto cuando tiene ambos tipos de indices
$prog[]          = "JavaScript";
$prog[]          = "Java";
$prog[5]         = "PHP";
$prog["movil"]   = "Kotlin";
$prog["moderno"] = "R";

var_dump($prog);
echo "<br>";
print_r($prog);
echo "<br><br>";

/*
$prog = array("C#", "VB", "Python", "Go");
var_dump($prog);
echo "<br>";
print_r($prog);
echo "<br><br>";

$prog = ["Azul","Verde", "Crema", "Rosado"];
var_dump($prog);
echo "<br>";
print_r($prog);
echo "<br><br>";
*/

echo "Array con: " .count($prog). " elementos<br>";

// for
/*
for ($p=0; $p<count($prog); $p++) {
    echo $prog[$p] . "<br>";
}
*/

// foreach con 1 variable || 2 variables
/*
foreach ($prog as $key => $value) {
    echo "Indice: $key, Valor: $value <br>";
}
*/

foreach ($prog as $value) {
    echo "Valor: $value <br>";
}