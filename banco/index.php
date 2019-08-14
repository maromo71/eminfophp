<?php
    include_once './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tabela de Alunos</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1>Exemplo Tabela 
            <span class="lead"> [Lista de Alunos]</span>
        </h1>
    </div>
</div>
    <?php
        //codificação para acentos
        $conn->exec("set names utf8");
        //preparando a consulta sql
        $sql = "Select * from tb_alunos";
        $result =$conn->query($sql);
        $alunos = $result->fetchAll(PDO::FETCH_ASSOC);
        //Exibindo
        //print_r($rows);
    ?>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>RM</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($alunos as $aluno) {
                        ?>
                        <tr>
                            <td><?=$aluno[rm]?></td>
                            <td><?=$aluno[nome]?></td>
                            <td><?=$aluno[email]?></td>
                        </tr>
                        <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <a href="#" class="btn btn-primary" style="width:100%;">Listar ALunos</a>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>