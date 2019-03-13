<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
        $data = date("d/m/y", time());
        $hora = date("h:i", time());

        echo 'Hoje é $data <br >';
        echo "Horário: $hora <br >";
    ?>
</body>
</html>