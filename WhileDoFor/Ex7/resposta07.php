<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

    //WHILE

        $massaInicial = $_GET['massaInicial'];
        $massaFinal = 0.5; 
        $tempo = 0; 
    
        echo '<strong>Massa com while</strong><br><br>';

            while ($massaInicial > $massaFinal) {
                $massaInicial /= 2;
                $tempo += 50;
            }
    
            $horas = floor($tempo / 3600);
            $minutos = floor(($tempo % 3600) / 60);
            $segundos = $tempo % 60;
    
            echo "Massa inicial: $massaInicial gramas\n<br>";
            echo "Massa final: $massaFinal gramas\n<br>";
            echo "Tempo necessário: $horas horas, $minutos minutos e $segundos segundos<br><br>";
        
        

    // DOWHILE

        $massaInicial = $_GET['massaInicial'];
            $massaFinal = 0.5;
            $tempo = 0;

            echo '<strong>Massa com dowhile</strong><br><br>';

    
            do {
                $massaInicial /= 2;
                $tempo += 50;
            } while ($massaInicial > $massaFinal);
    
            $horas = floor($tempo / 3600);
            $minutos = floor(($tempo % 3600) / 60);
            $segundos = $tempo % 60;
    
            echo "Massa inicial: $massaInicial gramas\n<br>";
            echo "Massa final: $massaFinal gramas\n<br>";
            echo "Tempo necessário: $horas horas, $minutos minutos e $segundos segundos<br><br>";
       

    // FOR
    
        $massaInicial = $_GET['massaInicial'];
            $massaFinal = 0.5; // Massa final desejada
            $tempo = 0; // Tempo inicial em segundos
    
            echo '<strong>Massa com for</strong><br><br>';


            for (; $massaInicial > $massaFinal; $tempo += 50) {
                $massaInicial /= 2;
            }
    
            $horas = floor($tempo / 3600);
            $minutos = floor(($tempo % 3600) / 60);
            $segundos = $tempo % 60;
    
            echo "Massa inicial: $massaInicial gramas\n<br>";
            echo "Massa final: $massaFinal gramas\n<br>";
            echo "Tempo necessário: $horas horas, $minutos minutos e $segundos segundos<br><br>";
        
?>
    
</body>
</html>