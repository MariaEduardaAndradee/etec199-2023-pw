<link rel="stylesheet" href="style.css">

<?php
    $qntPaes = $_GET['qntPaes'];
    $qntBroas = $_GET['qntBroas'];

    $vendaTotal = ($qntPaes * 0.12) + ($qntBroas * 1.50);
    $valorPoupanca = $vendaTotal * 0.10;
    
    echo "O total de vendas foi de: R$ $vendaTotal <br>";
    echo "O Valor a ser guardado na poupança é de: R$ $valorPoupanca";
?>