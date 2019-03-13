<?php
    //Pegar as variaveis do formulario
    //Variáveis salario e aumento
    $salario = $_POST["salario"];
    $numero = $_POST["ehcasado"];
    if($numero=="1"){
        $ehCasado = true;
    }else{
        $ehCasado = false;
    }
    //Fazer o if para verificação
    //Se for casado e ganhar acima de 1500
    //o aumento é de 10%
    //Se nao for casado e ganhar acima de 2000
    //o aumento é de 11%.
    //Em outras situacoes o aumento é de 9%
    if($salario > 1500 && $ehCasado){
        $aumento = $salario * 0.1;
    }else{
        if($salario > 2000 && !$ehCasado){
            $aumento = $salario * 0.11;
        }else{
            $aumento = $salario * 0.09;
        }
    }
    echo "Valor do aumento: $aumento";