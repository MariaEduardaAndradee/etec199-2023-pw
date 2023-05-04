<?php
    $camPeq = $_GET['camPeq'];
    $camMed = $_GET['camMed'];
    $camGra = $_GET['camGra'];

    $precoPeq = 10;
    $precoMed = 12;
    $precoGra = 15;

    $valorPeq = $camPeq * $precoPeq;
    $valorMed = $camMed * $precoMed;
    $valorGra = $camGra * $precoGra;
    $valorTotal = $valorPeq + $valorMed + $valorGra;

    
    echo "Camisetas Pequenas: R$ $valorPeq <br>";
    echo "<br>";
    echo "Camisetas Médias: R$ $valorMed <br>";
    echo "<br>";
    echo "Camisetas Grandes: R$ $valorGra <br>";
    echo "<br>";
    echo "O preço total do pedido é de: $valorTotal <br>";
?>