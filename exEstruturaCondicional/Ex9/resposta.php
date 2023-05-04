<?php
    $salario = $_GET['salario'];

    $aumento = ($salario + ($salario * 0.15));
    $desconto = ($salario - ($salario * 0.08));
    
    echo "Seu salário inicial: $salario <br>";
    echo "<br>";
    echo "Seu salário com aumento de 15%: $aumento <br>";
    echo "<br>";
    echo "Seu salário com desconto de 8%: $desconto";
?>