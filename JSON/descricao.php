<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes</title>

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
            color: #fff;
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
            width: 900px;
            height: 500px;
            background: #545454;
            border-radius: 15px;
            box-shadow: 1px 5px 60px 0px #232324;
            margin: 20px;
            display: inline-block;
            margin-left: 18%;
            border: 15px;
            margin-top: 150px;
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
            font-size: 30px;
            margin-right: 80px;
            margin-top: 5   0px;
        }

        .card .job {
            font-weight: 400;
            color: white;
            display: block;
            text-align: right;
            padding-top: 3px;
            font-size: 12px;
            margin-right: 100px;
            margin-top: 20px;
        }

        .card .img {
            width: 70px;
            height: 90px;
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
            margin-right: 100px;
            margin-top: 20px;
        }

        .card button:hover {
            background: #c8cccf;
            cursor: pointer;
        }
    

    </style>

</head>
<body>

        <script>
        function redirectDescricao(id) {
            window.location.href = 'http://localhost:2023/JSON/descricao.php?id=' + id;
        }
        </script>

<?php
        $produto_id = $_GET['id'];
        $produtos = json_decode(file_get_contents('http://localhost:2023/JSON/JSON/lista.json'));

        $produto_encontrado = null;
        foreach ($produtos as $produto) {
            if ($produto->id == $produto_id) {
                $produto_encontrado = $produto;
                break;
            }
        }

        if ($produto_encontrado) {
            echo '<div class="card">';
            echo '<div class="card-border-top"></div>';
            echo '<div class="img"><img src="' . $produto_encontrado->img . '" alt="' . $produto_encontrado->nome . '"></div>';
            echo '<span><h2>' . $produto_encontrado->nome . '</h2></span>';
            echo '<p class="job">Categoria: ' . $produto_encontrado->categoria . '</p>';
            echo '<p class="job">Preço: R$ ' . number_format($produto_encontrado->preco, 2, ',', '') . '</p>';
            echo '<p class="job">Cor: ' . $produto_encontrado->cor . '</p>';
            echo '<p class="job">Tamanho: ' . $produto_encontrado->tamanho . '</p>';
            echo '<button onclick="redirectDescricao(' . $produto->id . ')">Comprar</button>';
            echo '</div>';
        } else {
            echo '<p>Produto não encontrado.</p>';
        }
?>
</body>
</html>