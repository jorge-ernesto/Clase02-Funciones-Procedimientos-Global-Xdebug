<?php

// Estandarizar los datos ingresados
// Nombre completo
// JUAN DE LA CRUZ
$dato = "                JuAn       de       la        cruz      ";

function texto_std($info) {
    // Eliminamos espacios en blanco de inicio y final de la cadena
    $info = trim($info);

    // Convertimos a mayusculas
    $info = strtoupper($info);

    // Buscamos "  " y reemplazamos por " "
    while (strpos($info, "  ") > 0) {
        $info = str_replace("  ", " ", $info);
    }

    // Retornamos informacion estandarizada
    return $info;
}

echo "<pre>|";
echo texto_std($dato);
echo "|</pre>";