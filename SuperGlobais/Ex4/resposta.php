<link rel="stylesheet" href="style.css">

<?php
    $precoGasolina = $_GET['precoGasolina'];
    $valorPagamento = $_GET['valorPagamento'];

    $litrosFinal1 = $valorPagamento / $precoGasolina; 
    $litrosFinal2 = number_format($litrosFinal1, 2);

    echo "O preço da gasolina é: $precoGasolina <br>";
    echo "Voce abasteceu: $litrosFinal2 litros de gasolina <br>";
    echo "Voce pagou: R$ $valorPagamento";
?>