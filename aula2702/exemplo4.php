<?php
    if(isset($_POST['valor1'])){
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $resultado = $valor1 + $valor2;
    }else{
        $valor1 = null;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Somar dois valores</title>
</head>
<body>
    <form action="exemplo4.php" method="post">
        <p>Digite o primeiro valor</p>
        <input type="text" name="valor1" id="valor1">

        <p>Digite o segundo valor</p>
        <input type="text" name="valor2" id="valor2">

        <input type="submit" value="Somar...">
    </form>
    <br>
    <?php
        if($valor1!=null){
            echo "O Resultado da soma é $resultado";
        }
    ?>
</body>
</html>