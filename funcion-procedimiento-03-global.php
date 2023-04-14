<?php

$amigo = "Miguel";

function saludar() {
    global $amigo; //Hacemos global a la variable, y hasta podemos modificarla. Global solo la usamos dentro de funciones
    echo "Bienvenido $amigo <br>";
    $amigo = "Esther"; //Modificamos variable global
}

echo $amigo . "<br>";
saludar();
echo $amigo . "<br>";