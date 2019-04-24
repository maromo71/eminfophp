<?php
    function calcularAreaTriangulo($b, $h){
        $area = ($b * $h) / 2.0;
        return $area;
    }
    //Testando
    $base = 5;
    $altura = 3;
    $resultado = calcularAreaTriangulo($base, $altura);
    echo "Area do Triangulo Ret: $resultado";