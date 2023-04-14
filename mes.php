<?php
    if (isset($_POST['txtmes'])) {
        $numero = $_POST['txtmes'];
        switch ($numero) {
            case '1':
                $nombre = "Enero";
                break;
            case '2':
                $nombre = "Febrero";
                break;
            case '3':
                $nombre = "Marzo";
                break;
            case '4':
                $nombre = "Abril";
                break;
            case '5':
                $nombre = "Mayo";
                break;
            default:
                $nombr = "Dato incorrecto";
                break;
        }
        echo "Ingresas $num, corresponde al mes de $nombre";
    }
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
        <form action="" method="post">
            Ingresa un numero: <br>
            <input type="text" name="txtmes"><br>

            <br>
            <input type="submit" value="Verificar">
        </form>
    </body>
</html>