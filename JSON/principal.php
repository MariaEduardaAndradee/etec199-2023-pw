<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
            background-color: #545454;
        }

        header {
            background-color: #545454;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: 20px;
        }

        h1 {
            font-size: 50px;
            
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            display: inline-flex;

        }

        .product-card {
            display: inline-flex;
            margin: 10px;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .card {
            width: 600px;
            height: 370px;
            background: #545454;
            border-radius: 15px;
            box-shadow: 1px 5px 60px 0px #232324;
            margin: 20px;
            display: inline-block;
            margin-left: 4%;
            border: 15px;
        }

        .card .card-border-top {
            width: 60%;
            height: 3%;
            background: #5c6b65;
            margin: auto;
            border-radius: 0px 0px 15px 15px;
        }

        .card span {
            font-weight: 600;
            color: white;
            text-align: right;
            display: block;
            padding-top: 10px;
            font-size: 18px;
            margin-right: 60px;
            margin-top: 35px;
        }

        .card .job {
            font-weight: 400;
            color: white;
            display: block;
            text-align: right;
            padding-top: 3px;
            font-size: 12px;
            margin-right: 60px;
            margin-top: 10px;
        }

        .card .img {
            width: 70px;
            height: 80px;
            background: #6b64f3;
            border-radius: 1000px;
            margin: 10px;
            margin-top: 30px;
            margin-left: 20px;
        }

        .card button {
            padding: 8px 25px;
            display: block;
            margin: auto;
            border-radius: 8px;
            border: none;
            margin-top: 30px;
            background: #5c6b65;
            color: white;
            font-weight: 600;
            margin-right: 60px;
            margin-top: 30px;
        }

        .card button:hover {
            background: #c8cccf;
            cursor: pointer;
        }

    </style>

        <script>
        function redirectDescricao(id) {
            window.location.href = 'descricao.php?id=' + id;
        }
        </script>

</head>
<body>
    <header>
        <h1>Bem Vindo a High Company</h1>
    </header>
    <?php

        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://localhost:2023/JSON/JSON/lista.json'
        ]);

            $response = curl_exec($curl);    

            curl_close($curl);

            $produtos = json_decode($response);
            

        echo '<br/>';echo '<br/>';

        foreach ($produtos as $produto) {
            echo '<div class="card">';
            echo '<div class="card-border-top"></div>';
            echo '<div class="img"><a href="descricao.php?id=' . $produto->id . '"><img src="' . $produto->img . '"></a></div>';
            echo '<span>' . $produto->nome . '</span>';
            echo '<p class="job">' . $produto->categoria . '</p>';
            echo '<button onclick="redirectDescricao(' . $produto->id . ')">Detalhes</button>';
            echo '</div>';
        }
        

?>
</body>
</html>