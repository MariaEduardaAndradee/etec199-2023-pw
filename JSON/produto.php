<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

    <style>
        body {
            background-color: #ffffff; /* Branco */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .card {
            border: 1px solid #000000; /* Preto */
            margin: 10px;
            padding: 10px;
            width: 200px;
            text-align: center;
            background-color: #ffffff; /* Branco */
        }
        .card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <?php
    
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://localhost:2023/JSON/lista.json'
    ]);
    $response = curl_exec($curl);    
    curl_close($curl);
    $produtos = json_decode($response);
    echo $produtos;
    ?>


    
</body>
</html>