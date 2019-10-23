<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Tela Login</title>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-3">Sistema Geral</h1>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Informações...</a>
        </p>
    </div>
</div>
<div class=container>
    <form method="post" action="home.php">
    <div class="form-group">
        <label for="emailI">Email (login)</label>
        <input type="email" class="form-control" name="emailInput" id="emailInput" aria-describedby="emailHelp" placeholder="Digite email">
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="senhaInput">Password</label>
        <input type="password" class="form-control" name="senhaInput" id="senhaInput" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</body>
</html>

