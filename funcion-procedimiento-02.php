<?php

function promediar($n1, $n2=0)
{
    $prom = ($n1 + $n2) / 2;
    return $prom;
}

$promedio = promediar(12, 17);
echo "El promedio es: $promedio";