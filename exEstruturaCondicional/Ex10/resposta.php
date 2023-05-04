<?php
    $horasNormais = $_GET['horasNormais']; 
    $horasExtras = $_GET['horasExtras']; 

    $salarioBruto = ($horasNormais * 10) + ($horasExtras * 15);

    $imposto = $salarioBruto * 0.1;
    $salarioLiquido = $salarioBruto - $imposto;

    echo "O salário bruto é R$ " . number_format($salarioBruto, 2, ',', '.') . "<br>";
    echo "<br>";
    echo "O salário líquido é R$ " . number_format($salarioLiquido, 2, ',', '.');
?>