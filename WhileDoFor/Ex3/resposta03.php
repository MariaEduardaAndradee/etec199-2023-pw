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

        echo "Tabuada do $numero utilizando while, apresentando somente numeros impares:\n<br><br>";
        while ($i <= 10) {
            $resultado = $numero * $i;
            $i++;

            if ($resultado % 2 != 0) {
                echo "$numero x $i = $resultado\n<br>";
            }
        }


    // DOWHILE
    $numero = $_GET['numero'];
        $i = 1;

        echo "<br><br>Tabuada do $numero utilizando dowhile, apresentando somente numeros impares:\n<br><br>";
        do {
            $resultado = $numero * $i;
            $i++;

            if ($resultado % 2 != 0) {
                echo "$numero x $i = $resultado\n<br>";
            }

        } while ($i <= 10);

        
    

    // FOR
    $numero = $_GET['numero'];

        echo "<br><br>Tabuada do $numero utilizando for, apresentando somente numeros impares:\n<br><br>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            

            if ($resultado % 2 != 0) {
                echo "$numero x $i = $resultado\n<br>";
            }

        }
    

?>
    
</body>
</html>