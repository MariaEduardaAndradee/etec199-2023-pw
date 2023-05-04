<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
</head>
<body>
    
    <style>
body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh; 
    margin: 0;
}

form {
    background: linear-gradient(to bottom, #393e61, #030726);
    padding: 20px;
    border-radius: 10px;
    max-width: 600px;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    font-family: Arial, sans-serif;
    color: white;
    
}

input[type=text], textarea {
    
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    
    background-color: #393e61;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #030726;
}
</style>
    <form>

    <?php 

$cod_pagamento = $_GET['cod_pagamento'];
$preco = $_GET['preco'];



if ($cod_pagamento == 1) {
        $valor_total = $preco * 0.9;
        echo "O valor a ser pago será de: R$ ", $valor_total; 
    } elseif ($cod_pagamento == 2) {
        $valor_total = $preco * 0.85;
        echo "O valor a ser pago será de: R$ ", $valor_total; 
    } elseif ($cod_pagamento == 3) {
        $valor_total = $preco; 
    } elseif ($cod_pagamento == 4) {
        $valor_total = $preco * 1.1; 
    } else {
        echo "Código de pagamento inválido.";
        
    }

    if($cod_pagamento == 3) {
    echo "Valor Final a ser pago será de duas vezes de: R$ ", ($valor_total / 2) ;
    }elseif($cod_pagamento == 4){
        echo "Valor Final a ser pago será de duas vezes de: R$ ", ($valor_total / 2) ;
    }
    
?>
    
    </form>
</body>
</html>
