<link rel="stylesheet" href="style.css">

<?php

    $base = $_GET ['base'];
    $altura = $_GET ['altura'];

    $area = ($base*$altura);

    echo "A área do retangulo é: " , $area;

?>