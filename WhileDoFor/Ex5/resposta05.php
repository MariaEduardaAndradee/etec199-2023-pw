<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

    //WHILE
    $numero = $_GET['numero'];

        $fatorial = 1;
        $i = $numero;

        echo "O fatorial de $numero é: <br><br>";

        if ($numero == 0) {
            echo "1";
        } else {
            while ($i >= 1) {
                $fatorial *= $i;
                $i--;
            }

            echo $fatorial;
        }
    
        

    // DOWHILE

    $numero = $_GET['numero'];

        $fatorial = 1;
        $i = $numero;

        echo "<br><br>O fatorial de $numero é: <br><br>";

        if ($numero == 0) {
            echo "1";
        } else {
            do {
                $fatorial *= $i;
                $i--;
            } while ($i >= 1);

            echo $fatorial;
        }


    // FOR
    
    $numero = $_GET['numero'];

        $fatorial = 1;
        echo "<br><br>O fatorial de $numero é: <br><br>";

        if ($numero == 0) {
            echo "1";
        } else {
            for ($i = $numero; $i >= 1; $i--) {
                $fatorial *= $i;
            }
            echo "$fatorial";
        }

?>
    
</body>
</html>