<?php
    echo 1 . "<br>";
    echo 2 . "<br>";
    echo 3 . "<br>";

    /*
    for ($i=1; $i<=50; $i=$i+1) {
        echo $i . "<br>";
    }
    */

    /*
    for ($i=0; $i<=50; $i=$i+2) {
        echo $i . "<br>";
    }
    */

    /**
    * Tabla ASCII
    * https://www.ascii-code.com/
    */
    $contador_columnas = 0;
    $numero_columnas   = 3;

    echo "<table border=1>";
    echo "<tr>"; //Primera fila de la tabla
    for ($i=65; $i<=90; $i++) {
        echo "<td>".chr($i)."</td>"; //Primera columna de la fila

        $contador_columnas++;
        if ($contador_columnas == $numero_columnas) {
            echo "</tr><tr>";
            $contador = 0;
        }
    }
    echo "</tr>";
    echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border=1>
            <tr> <!-- Primera fila de la tabla -->
                <td>A</td> <!-- Primera columna de la fila -->
                <td>B</td> <!-- Segunda columna de la fila -->
            </tr>
            <tr> <!-- Segunda fila de la tabla -->
                <td>1</td> <!-- Primera columna de la fila -->
                <td>2</td> <!-- Segunda columna de la fila -->
            </tr>
        </table>
    </body>
</html>