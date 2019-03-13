<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo 1</title>
</head>
<body>
    <h1>Exemplo de HTML com PHP</h1>
    <!--
        comentario de html
     -->
    <?php
        $nome = "Prof. Maromo";
        $sala = "2 eminfo";
        // comentario de php
        $valor = 35;
    ?>
    <p>Nome do Professor: </p>
    <p><?=$nome?></p>
    <hr>
    <p>Sala que está lecionando
     <?=$sala?> hoje</p>
</body>
</html>