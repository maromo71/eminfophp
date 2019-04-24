<?php
    //Receber o valor entrado pelo usuario
    //no formulario
    $n = $_POST["numero"];

    //Definir a contagem
    //Se é crescente ou decrescente até 100
    if($n <= 100){
        for ($i=$n; $i <= 100; $i++) { 
            echo "$i <br />";
        }
    }else{
        for ($i=$n; $i >= 100; $i--){
            echo "$i <br />";
        }
    }
