<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="container">

    <?php

        echo "<br>"."<b>EXIBINDO LOOP DE FRUTAS</b>"."<br>";
        
        $frutas = array("1" => "manga", "2" => "pera", "3" => "abacate");
        
        foreach ($frutas as $f => $value) {
            echo $frutas[$f]."<br>";
        }

        //REMOVENDO O ELEM DA POSIÇÃO 1

        $carros = ["Chevette", "Ferrari", "Corsa"];
        array_slice($carros, 1);

        //REMOVENDO MULTIPLOS ELEMENTOS
        $lista = array('apple', 'orange', 'strawberry', 'blueberry', 'kiwi');
        array_splice($lista, 2, 2); //o primeiro é a posição, o segundo é a qtd.

        echo "<br>"."<b>OUTRA FORMA DE EXIBIR O ARRAY</b>"."<br>";
        for($i=0; $i<count($lista); $i++){
            echo $lista[$i]."<br>"; 
        }

        echo "<br>"."<b>FILTRANDO UM ARRAY</b>"."<br>";
        $response = array_filter($lista, function($fruta){
            return $fruta == 'orange';
        });
        var_dump($response);
        echo "<br>";
        echo "<br>"."<b>INSERINDO ELEMENTO EM NOVO ARRAY</b>"."<br>";
        $novoArray = [];

        for($i=0; $i<count($lista); $i++){
            array_push($novoArray, $lista[$i]);
        }

        for($i=0; $i<count($lista); $i++){
            echo ".....";
            echo $novoArray[$i]."<br>";
        }

        $numeros = [1, 2, 3, 4, 5];

        echo "<br>"."<b>PERCORRE O ARRAY A FIM DE REALIZAR ALGUMA AÇÃO</b>"."<br>";
        $elementos = array_map(fn($n) => $n * 2, $numeros);

        for($i=0; $i<count($elementos); $i++){
            echo ".....";
            echo $elementos[$i]."<br>";
        }
    ?>

</body>
</html>