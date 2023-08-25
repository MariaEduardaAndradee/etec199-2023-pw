<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

    //WHILE

        $numero = $_GET['numero'];
    
            echo "<br><br>Divisores de $numero:\n<br><br>";
    
            $i = 1;
            while ($i <= $numero) {
                if ($numero % $i == 0) {
                    echo $i . "\n<br>";
                }
                $i++;
            }
        
        

    // DOWHILE

        $numero = $_GET['numero'];
    
            echo "<br><br>Divisores de $numero:\n<br><br>";
    
            $i = 1;
            do {
                if ($numero % $i == 0) {
                    echo $i . "\n<br>";
                }
                $i++;
            } while ($i <= $numero);
        


    // FOR
    
    $numero = $_GET['numero'];
    
        echo "<br><br>Divisores de $numero:\n<br><br>";
    
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                echo $i . "\n<br>";
            }
        }
        
?>
    
</body>
</html>