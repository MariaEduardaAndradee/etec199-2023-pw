<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números impares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

    //WHILE
    $n = $_GET['n'];
    
        echo "<br><br>Números ímpares de 1 a $n, utilizando while:\n<br><br>";
        $i = 1;
            while ($i <= $n) {
                if ($i % 2 != 0) {
                    echo $i . "\n<br>";
                }
                $i++;
            }
        

    // DOWHILE
    $n = $_GET['n'];

        echo "<br><br>Números ímpares de 1 a $n, utilizando dowhile:\n<br><br>";

        $i = 1;
        do {
            if ($i % 2 != 0) {
                echo $i . "\n<br>";
            }
            $i++;
        } while ($i <= $n);


    // FOR
    $n = $_GET['n'];

        echo "<br><br>Números ímpares de 1 a $n, utilizando for:\n<br><br>";
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 != 0) {
                echo $i . "\n<br>";
            }
        }

?>
    
</body>
</html>