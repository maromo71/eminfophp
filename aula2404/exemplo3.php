<?php
    function calcularImc($peso, $altura){
        $imc = $peso / pow($altura, 2.0);
        return $imc;
    }
    $peso = 105.09;
    $altura = 1.71;
    $imc = calcularImc($peso, $altura);
    echo "Resultado: $imc";