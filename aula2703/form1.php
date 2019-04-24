<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário Teste</title>
</head>
<body>
    <form action="envio.php" method="post">
       <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" size="60">
       </p>
       <p>
            <label for="idade">Idade: </label>
            <input type="number" name="idade" id="idade">
       </p>
        <p>
            <label for="sexo">Sexo: </label>
            <input type="radio" name="sexo" value="masculino"> Masculino 
            <input type="radio" name="sexo" value="feminino"> Feminino <br>
        </p>
        <p>
            <input type="submit" value="Processar">
        </p>
    </form>
</body>
</html>
