<link rel="stylesheet" href="style.css">

<?php
    $quilos = $_GET['quilos'];

    $valorPagar = $quilos * 12;

    echo "O valor a pagar é: R$ $valorPagar";
?>