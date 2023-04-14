<?php

// Calcular el promedio de n numeros
function promediar($notas)
{
    $cantidad = count($notas);
    $suma = 0;
    foreach ($notas as $key => $value) {
        $suma += $value;
    }
    $promedio = $suma / $cantidad;
    return $promedio;
}

$notas = [14, 16, 11, 15, 9, 12];
$promedio = promediar($notas);
echo "El promedio es: $promedio";