<?php
    $tempoDias = $_GET['tempoDias'];

    $anos = floor($tempoDias / 365);
    $meses = floor(($tempoDias % 365) / 30);
    $dias = ($tempoDias % 365) % 30;

    echo "O tempo de trabalho sem acidentes equivale a: <br>"; 
    echo "<br>";
    echo "$anos anos <br>"; 
    echo "<br>";
    echo "$meses meses <br>"; 
    echo "<br>";
    echo "$dias dias.";
?>