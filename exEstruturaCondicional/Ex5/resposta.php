<?php
    $quilos = $_GET['quilos'];

    $valorPagar = $quilos * 12;

    echo "O valor a pagar é: R$ $valorPagar";
?>