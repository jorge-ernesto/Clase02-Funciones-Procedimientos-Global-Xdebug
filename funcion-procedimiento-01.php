<?php

function saludar()
{
    echo "Bienvenido a PHP <br>";
}

function promediar($n1, $n2)
{
    $prom = ($n1 + $n2) / 2;
    return $prom;
}

saludar();

$promedio = promediar(13, 16);
echo "El promedio es: $promedio";