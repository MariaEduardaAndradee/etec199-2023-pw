<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

    //WHILE
    $numero = $_GET['numero'];
        $i = 1;

        echo "Tabuada do $numero utilizando while:\n<br><br>";
        while ($i <= 10) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado\n<br>";
            $i++;
        }


    // DOWHILE
    $numero = $_GET['numero'];
        $i = 1;

        echo "<br><br>Tabuada do $numero utilizando dowhile:\n<br><br>";
        do {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado\n<br>";
            $i++;
        } while ($i <= 10);
    

    // FOR
    $numero = $_GET['numero'];

        echo "<br><br>Tabuada do $numero utilizando for::\n<br><br>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado\n<br>";
        }
    

?>
    
</body>
</html>