<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque</title>
<link rel="stylesheet" href="style.css"></head>
<body>


<?php

    //WHILE

        $quantidadeEstoque = $_GET['quantidadeEstoque'];

        echo '<br><br>Calculo com while<br><br>';
    
            $consumoDiario = 150;
            $dias = 0; 
    
            while ($quantidadeEstoque > 0) {
                $quantidadeEstoque -= $consumoDiario;
                $dias++;
                echo "Dia $dias - Quantidade em estoque: $quantidadeEstoque\n<br>";
            }
        
        

    // DOWHILE

        $quantidadeEstoque = $_GET['quantidadeEstoque'];

        echo '<br><br>Calculo com dowhile<br><br>';
    
            $consumoDiario = 150; 
            $dias = 0; 
    
            do {
                $quantidadeEstoque -= $consumoDiario;
                $dias++;
                echo "Dia $dias - Quantidade em estoque: $quantidadeEstoque\n<br>";
            } while ($quantidadeEstoque > 0);
        

    // FOR
    
        $quantidadeEstoque = $_GET['quantidadeEstoque'];

        echo '<br><br>Calculo com for<br><br>';

    
            $consumoDiario = 150; 
    
            for ($dias = 1; $quantidadeEstoque > 0; $dias++) {
                $quantidadeEstoque -= $consumoDiario;
                echo "Dia $dias - Quantidade em estoque: $quantidadeEstoque\n<br>";
            }
        

?>
    
</body>
</html>