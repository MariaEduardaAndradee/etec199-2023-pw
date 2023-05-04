<link rel="stylesheet" href="style.css">

<?php

    $nomeAutomovel = $_GET['nomeAutomovel'];
    $precoFabrica = $_GET['precoFabrica'];

    $impostos = $precoFabrica * 0.45;
    $porcentagemRevendedor = $impostos * 0.28;
    $precoFinal = $precoFabrica + $impostos + $porcentagemRevendedor;
    
    echo "O veiculo: $nomeAutomovel <br> "; 
    echo "O preço é de: R$ $precoFinal";
?>