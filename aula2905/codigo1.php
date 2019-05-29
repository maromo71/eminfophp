<?php
    $notas = [
        "Ze" => "10", 
        "Pedro" => "9",
        "Maria" => "6",
        "Ricardo" => "3"
    ];
    //echo "Nota do Jose: " . $notas["Ze"] . " <br>";
    //echo "Nota do Ricardo " . $notas["Ricardo"] . "<br>";
    print_r($notas); //Visualizar conteudo de um vetor
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exemplo - percorrer vetor</title>
</head>
<body>
    <br>
    <?php
        foreach ($notas as $aluno => $nota) {
            echo "A nota do $aluno é $nota <br>";
        }
    ?>
</body>
