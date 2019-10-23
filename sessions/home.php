<?php
    session_start();
    $_SESSION["email"] = $_POST["emailInput"];
    $_SESSION["senha"] = $_POST["senhaInput"];
    include_once "valida.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
<ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link active" href="encerra.php">Sair</a>
    </li>
</ul>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Home</h1>
            <p class="lead">Página protegida</p>
            <hr class="my-2">
        </div>
    </div>
   

    <div class="container">
        <h3>Usuário: <?=$_SESSION['email']?></h3>
    </div>
    
    <div class="container">
        <p>Teste de parágrafo. Testo aleatório....</p>
    </div>
</html>