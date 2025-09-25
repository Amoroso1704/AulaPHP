<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio de PHP</h1>

    <form name="form" method="POST" action="">

    <p>
        Digite o nome do cliente<br>
        <input type="text" name="cliente">
    </p>

    <p>
        Escolha o sexo do cliente<br>
        <input type="radio" name="sexo" value="F">Feminino<br> 
        <input type="radio" name="sexo" value="M">Masculino<br>
    </p>

    <p>
        Digite o valor da compra<br>
        <input type="text" name="valorcompra">
    </p>

    <p>
        <input type="submit" value="Calcular">
    </p>

    <?php

    if(isset($_REQUEST["Calcular"])){

        $nome = $_REQUEST["cliente"];
        $sexo = $_REQUEST["sexo"];
        $valor = $_REQUEST["valor"];

        echo $nome;
        echo $sexo;

        if($sexo == F){
            $valorfinal = $valor * 1.20;
            $desconto = $valor - $valorfinal;
            echo $valorfinal;;
        }
        if($sexo == M){
            $valorfinal = $valor * 1.05;
            $desconto = $valor - $valorfinal;
            echo $valorfinal;
        }



    }

    ?>
</body>
</html>