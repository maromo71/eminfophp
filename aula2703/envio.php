<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Processado</title>
</head>
<body>
    <h2>Dados do Formulário</h2>
    <p>
        O nome da pessoa é: <?=$nome?> 
    </p>
    <p>
        Sua idade é: <?=$idade?> 
    </p>
    <p>
        Sexo da Pessoa: <?=$sexo?> 
    </p>
</body>
</html>